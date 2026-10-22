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

namespace Fisharebest\Webtrees\Tests\Unit\Services;

use DateTimeImmutable;
use DateTimeZone;
use Fisharebest\Webtrees\Clock\FrozenClock;
use Fisharebest\Webtrees\Services\BuildInfoService;
use Fisharebest\Webtrees\Tests\TestCase;
use PHPUnit\Framework\Attributes\CoversClass;

use function file_get_contents;
use function file_put_contents;
use function is_dir;
use function json_decode;
use function json_encode;
use function mkdir;
use function rmdir;
use function scandir;
use function sys_get_temp_dir;
use function uniqid;
use function unlink;

use const JSON_THROW_ON_ERROR;

#[CoversClass(BuildInfoService::class)]
class BuildInfoServiceTest extends TestCase
{
    private string $root_dir;

    protected function setUp(): void
    {
        parent::setUp();

        $this->root_dir = sys_get_temp_dir() . '/' . uniqid('webtrees-build-info-', true) . '/';

        mkdir($this->root_dir, 0777, true);
    }

    protected function tearDown(): void
    {
        $this->removeFolder($this->root_dir);

        parent::tearDown();
    }

    public function testNoBuildInformation(): void
    {
        $service = $this->service();

        self::assertNull($service->buildTimestamp());
        self::assertSame('', $service->gitCommit());
        self::assertSame('', $service->gitCommitShort());
        self::assertSame('', $service->gitBranch());
    }

    public function testBuildInformationFile(): void
    {
        file_put_contents(
            $this->root_dir . BuildInfoService::BUILD_INFO_FILE,
            json_encode([
                'build_date' => '2026-10-21T14:32:11+00:00',
                'git_commit' => '1234567890abcdef1234567890abcdef12345678',
                'git_branch' => 'main',
            ], JSON_THROW_ON_ERROR),
        );

        $service = $this->service();

        self::assertSame(1792593131, $service->buildTimestamp());
        self::assertSame('1234567890abcdef1234567890abcdef12345678', $service->gitCommit());
        self::assertSame('1234567890', $service->gitCommitShort());
        self::assertSame('main', $service->gitBranch());
    }

    public function testGitRepository(): void
    {
        $this->createGitFolder();

        file_put_contents($this->root_dir . '.git/HEAD', "ref: refs/heads/tim-mods\n");
        file_put_contents($this->root_dir . '.git/refs/heads/tim-mods', "abcdef1234567890abcdef1234567890abcdef12\n");
        file_put_contents($this->root_dir . '.git/logs/HEAD', "0000000 abcdef1234567890abcdef1234567890abcdef12 Test <test@example.com> 1792593131 +0000\tcommit (initial): Test\n");

        $service = $this->service();

        self::assertSame(1792593131, $service->buildTimestamp());
        self::assertSame('abcdef1234567890abcdef1234567890abcdef12', $service->gitCommit());
        self::assertSame('abcdef1234', $service->gitCommitShort());
        self::assertSame('tim-mods', $service->gitBranch());
    }

    public function testGitRepositoryWithPackedRefs(): void
    {
        $this->createGitFolder();

        file_put_contents($this->root_dir . '.git/HEAD', "ref: refs/heads/main\n");
        file_put_contents($this->root_dir . '.git/packed-refs', "# pack-refs with: peeled fully-peeled sorted \n1234567890abcdef1234567890abcdef12345678 refs/heads/main\n");

        $service = $this->service();

        self::assertSame('1234567890abcdef1234567890abcdef12345678', $service->gitCommit());
        self::assertSame('main', $service->gitBranch());
    }

    public function testDetachedHead(): void
    {
        $this->createGitFolder();

        file_put_contents($this->root_dir . '.git/HEAD', "1234567890abcdef1234567890abcdef12345678\n");

        $service = $this->service();

        self::assertSame('1234567890abcdef1234567890abcdef12345678', $service->gitCommit());
        self::assertSame('', $service->gitBranch());
    }

    public function testWriteBuildInfo(): void
    {
        $this->createGitFolder();

        file_put_contents($this->root_dir . '.git/HEAD', "ref: refs/heads/main\n");
        file_put_contents($this->root_dir . '.git/refs/heads/main', "1234567890abcdef1234567890abcdef12345678\n");

        $filename = $this->root_dir . BuildInfoService::BUILD_INFO_FILE;

        $this->service()->writeBuildInfo($filename);

        $build_info = json_decode((string) file_get_contents($filename), true, flags: JSON_THROW_ON_ERROR);

        self::assertIsArray($build_info);
        self::assertSame('2026-10-21T14:32:11+00:00', $build_info['build_date']);
        self::assertSame('1234567890abcdef1234567890abcdef12345678', $build_info['git_commit']);
        self::assertSame('main', $build_info['git_branch']);
    }

    private function service(): BuildInfoService
    {
        $clock = new FrozenClock(new DateTimeImmutable('2026-10-21 14:32:11', new DateTimeZone('UTC')));

        return new BuildInfoService($clock, $this->root_dir);
    }

    /**
     * Create the folders that a git repository contains.
     */
    private function createGitFolder(): void
    {
        mkdir($this->root_dir . '.git', 0777, true);
        mkdir($this->root_dir . '.git/refs', 0777, true);
        mkdir($this->root_dir . '.git/refs/heads', 0777, true);
        mkdir($this->root_dir . '.git/logs', 0777, true);
    }

    private function removeFolder(string $folder): void
    {
        if (!is_dir($folder)) {
            return;
        }

        $files = scandir($folder);

        foreach ($files as $file) {
            if ($file === '.' || $file === '..') {
                continue;
            }

            $path = $folder . '/' . $file;

            if (is_dir($path)) {
                $this->removeFolder($path);
            } else {
                unlink($path);
            }
        }

        rmdir($folder);
    }
}
