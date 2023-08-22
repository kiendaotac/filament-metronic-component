<?php

namespace Kiendaotac\FilamentMetronicComponent\Commands;

use Illuminate\Console\Command;

class FilamentMetronicComponentCommand extends Command
{
    public $signature = 'filament-metronic-component';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
