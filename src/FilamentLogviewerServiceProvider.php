<?php

namespace Rabol\FilamentLogviewer;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabol\FilamentLogviewer\Commands\FilamentLogviewerCommand;

class FilamentLogviewerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-logviewer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament-logviewer_table')
            ->hasCommand(FilamentLogviewerCommand::class);
    }
}
