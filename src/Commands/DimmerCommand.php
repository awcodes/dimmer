<?php

namespace Awcodes\Dimmer\Commands;

use Illuminate\Console\Command;

class DimmerCommand extends Command
{
    public $signature = 'dimmer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
