<?php

namespace PartridgeRocks\LaraCards\Commands;

use Illuminate\Console\Command;

class LaraCardsCommand extends Command
{
    public $signature = 'laracards';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
