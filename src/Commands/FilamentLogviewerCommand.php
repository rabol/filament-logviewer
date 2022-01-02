<?php

namespace Rabol\FilamentLogviewer\Commands;

use Illuminate\Console\Command;

class FilamentLogviewerCommand extends Command
{
    public $signature = 'filament-logviewer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
