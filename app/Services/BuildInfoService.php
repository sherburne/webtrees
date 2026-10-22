<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2026 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Services;

use Fisharebest\Webtrees\Webtrees;
use Psr\Clock\ClockInterface;

use function count;
use function explode;
use function file;
use function file_get_contents;
use function file_put_contents;
use function filemtime;
use function is_array;
use function is_dir;
use function is_file;
use function is_string;
use function json_decode;
use function json_encode;
use function preg_match;
use function rtrim;
use function str_starts_with;
use function strtotime;
use function substr;
use function trim;

use const FILE_IGNORE_NEW_LINES;
use const FILE_SKIP_EMPTY_LINES;
use const JSON_PRETTY_PRINT;

/**
 * Information about the build of webtrees that is running.
 *
 * A release contains a "build-info.json" file, created when the release was built.
 * A development installation contains a ".git" folder, which we can read directly.
 */
class BuildInfoService
{
    /**
     * The name of the file that contains the build information.
     */
    public const string BUILD_INFO_FILE = 'build-info.json';

    /**
     * The number of characters of a commit hash to display.
     */
    private const int SHORT_HASH_LENGTH = 10;

    private readonly string $root_dir;

    /**
     * @var array<string,string>|null
     */
    private array|null $build_info = null;

    public function __construct(
        private readonly ClockInterface $clock,
        string|null $root_dir = null,
    ) {
        $this->root_dir = rtrim($root_dir ?? Webtrees::ROOT_DIR, '/') . '/';
    }

    /**
     * The date and time that this build was created, as a Unix timestamp.
     */
    public function buildTimestamp(): int|null
    {
        return $this->readBuildTimestamp();
    }

    /**
     * The hash of the git commit that this build was created from.
     */
    public function gitCommit(): string
    {
        $git_directory = $this->gitDirectory();

        if ($git_directory !== null) {
            return $this->readGitCommit($git_directory);
        }

        return $this->readBuildInfo()['git_commit'] ?? '';
    }

    /**
     * The abbreviated hash of the git commit that this build was created from.
     */
    public function gitCommitShort(): string
    {
        return substr($this->gitCommit(), 0, self::SHORT_HASH_LENGTH);
    }

    /**
     * The name of the git branch that this build was created from.
     */
    public function gitBranch(): string
    {
        $git_directory = $this->gitDirectory();

        if ($git_directory !== null) {
            return $this->readGitBranch($git_directory);
        }

        return $this->readBuildInfo()['git_branch'] ?? '';
    }

    /**
     * Create a file containing information about this build.
     * This is used when building a release, and by "composer install".
     *
     * @return bool True if the file was created.
     */
    public function writeBuildInfo(string $filename): bool
    {
        $git_directory = $this->gitDirectory();

        // Without a git repository, there is no build information to record.
        if ($git_directory === null) {
            return false;
        }

        $build_info = [
            'build_date' => $this->clock->now()->format('Y-m-d\TH:i:sP'),
            'git_commit' => $this->readGitCommit($git_directory),
            'git_branch' => $this->readGitBranch($git_directory),
        ];

        $json = json_encode($build_info, JSON_PRETTY_PRINT);

        if ($json === false) {
            return false;
        }

        $this->build_info = null;

        return file_put_contents($filename, $json . "\n") !== false;
    }

    /**
     * The date and time that this build was created.
     */
    private function readBuildTimestamp(): int|null
    {
        $git_directory = $this->gitDirectory();

        if ($git_directory !== null) {
            return $this->readGitTimestamp($git_directory);
        }

        $build_date = $this->readBuildInfo()['build_date'] ?? '';

        if ($build_date !== '') {
            $timestamp = strtotime($build_date);

            if ($timestamp !== false) {
                return $timestamp;
            }
        }

        return null;
    }

    /**
     * The path to the ".git" folder, if this is a development installation.
     */
    private function gitDirectory(): string|null
    {
        $path = $this->root_dir . '.git';

        if (is_file($path)) {
            // Worktrees and submodules use a file containing "gitdir: <path>".
            $contents = file_get_contents($path);

            if ($contents === false || preg_match('/^gitdir:\s*(.+)$/m', $contents, $matches) !== 1) {
                return null;
            }

            $path = trim($matches[1]);

            if (!str_starts_with($path, '/')) {
                $path = $this->root_dir . $path;
            }
        }

        return is_dir($path) ? $path : null;
    }

    /**
     * The contents of the "HEAD" file.
     */
    private function readGitHead(string $git_directory): string
    {
        $head = file_get_contents($git_directory . '/HEAD');

        return $head === false ? '' : trim($head);
    }

    /**
     * The name of the current branch.  Empty if "HEAD" is detached.
     */
    private function readGitBranch(string $git_directory): string
    {
        $head = $this->readGitHead($git_directory);

        if (!str_starts_with($head, 'ref: ')) {
            return '';
        }

        $ref = trim(substr($head, 5));

        // "refs/heads/main" becomes "main".
        if (str_starts_with($ref, 'refs/heads/')) {
            return substr($ref, 11);
        }

        return $ref;
    }

    /**
     * The hash of the current commit.
     */
    private function readGitCommit(string $git_directory): string
    {
        $head = $this->readGitHead($git_directory);

        if (!str_starts_with($head, 'ref: ')) {
            // "HEAD" is detached, so it contains the hash of the commit.
            return $head;
        }

        $ref = trim(substr($head, 5));

        $file = $git_directory . '/' . $ref;

        if (is_file($file)) {
            $hash = file_get_contents($file);

            return $hash === false ? '' : trim($hash);
        }

        // The reference may have been packed into the "packed-refs" file.
        $packed_refs = $git_directory . '/packed-refs';

        if (is_file($packed_refs)) {
            $lines = file($packed_refs, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            if (is_array($lines)) {
                foreach ($lines as $line) {
                    if ($line === '' || $line[0] === '#' || $line[0] === '^') {
                        continue;
                    }

                    $parts = explode(' ', $line);

                    if (count($parts) === 2 && $parts[1] === $ref) {
                        return $parts[0];
                    }
                }
            }
        }

        return '';
    }

    /**
     * The date and time of the most recent update to the repository.
     */
    private function readGitTimestamp(string $git_directory): int|null
    {
        // The reflog contains a timestamp for every update to the repository.
        $log = $git_directory . '/logs/HEAD';

        if (is_file($log)) {
            $lines = file($log, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            if (is_array($lines) && $lines !== []) {
                $line = $lines[count($lines) - 1];

                if (preg_match('/\s(\d+)\s[+-]\d{4}\t/', $line, $matches) === 1) {
                    return (int) $matches[1];
                }
            }
        }

        // Fall back to the date that the version number was last changed.
        $file = $this->root_dir . 'app/Webtrees.php';

        if (is_file($file)) {
            $timestamp = filemtime($file);

            if ($timestamp !== false) {
                return $timestamp;
            }
        }

        return null;
    }

    /**
     * The build information stored in the "build-info.json" file.
     *
     * @return array<string,string>
     */
    private function readBuildInfo(): array
    {
        if ($this->build_info !== null) {
            return $this->build_info;
        }

        $this->build_info = [];

        $file = $this->root_dir . self::BUILD_INFO_FILE;

        if (!is_file($file)) {
            return $this->build_info;
        }

        $contents = file_get_contents($file);

        if ($contents === false) {
            return $this->build_info;
        }

        $data = json_decode($contents, true);

        if (!is_array($data)) {
            return $this->build_info;
        }

        foreach ($data as $key => $value) {
            if (is_string($key) && is_string($value)) {
                $this->build_info[$key] = $value;
            }
        }

        return $this->build_info;
    }
}
