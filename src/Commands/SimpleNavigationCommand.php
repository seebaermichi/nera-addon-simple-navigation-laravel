<?php

namespace nera\SimpleNavigation\Commands;

use Illuminate\Console\Command;

class SimpleNavigationCommand extends Command
{
    public $signature = 'simple-navigation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
