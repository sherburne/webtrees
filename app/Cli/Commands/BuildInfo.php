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

namespace Fisharebest\Webtrees\Cli\Commands;

use Fisharebest\Webtrees\Services\BuildInfoService;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class BuildInfo extends AbstractCommand
{
    public function __construct(private readonly BuildInfoService $build_info_service)
    {
        parent::__construct();
    }

    protected function configure(): void
    {
        $this
            ->setName(name: 'build-info')
            ->setDescription(description: 'Create a file containing information about this build')
            ->addArgument(name: 'filename', mode: InputArgument::OPTIONAL, description: 'The name of the file to create', default: BuildInfoService::BUILD_INFO_FILE);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $filename = $this->stringArgument(input: $input, name: 'filename');

        if ($this->build_info_service->writeBuildInfo($filename)) {
            $output->writeln('Created ' . $filename);
        } else {
            $output->writeln('Not created ' . $filename . ': no git repository, or the file is not writable.');
        }

        return self::SUCCESS;
    }
}
