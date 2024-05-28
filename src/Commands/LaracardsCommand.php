<?php

namespace partridge-rocks\Laracards\Commands;

use Illuminate\Console\Command;

class LaracardsCommand extends Command
{
    public $signature = 'laracards';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
