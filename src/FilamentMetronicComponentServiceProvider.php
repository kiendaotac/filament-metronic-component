<?php

namespace Kiendaotac\FilamentMetronicComponent;

use Kiendaotac\FilamentMetronicComponent\Commands\FilamentMetronicComponentCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMetronicComponentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-metronic-component')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-metronic-component_table')
            ->hasCommand(FilamentMetronicComponentCommand::class);
    }
}
