<?php

/**
 * This file is part of the Spryker Demoshop.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Acceptance\Cli;

use Acceptance\Cli\Tester\CliTester;

/**
 * @group Cli
 */
class CliCest
{

    /**
     * @param \Acceptance\Cli\Tester\CliTester $i
     *
     * @return void
     */
    public function testItShouldPossibleToRun(CliTester $i)
    {
        $i->runShellCommand('vendor/bin/console application:build-navigation-cache -vvv');
        $i->canSeeInShellOutput('Build navigation cache');
    }

}
