<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Rabol\Pages\LogViewerPage;
use Rabol\FilamentLogviewer\Classes\Package;
use Rabol\FilamentLogviewer\Traits\ServiceProvider;
use Rabol\FilamentLogviewer\Commands\FilamentLogviewerCommand;

class FilamentLogviewerServiceProvider extends PluginServiceProvider
{
    use ServiceProvider;

    public static string $name = 'log-viewer';
 
    protected function getPages(): array
    {
        return [
            LogViewerPage::class,
        ];
    }

    protected function getWidgets(): array
    {
        return [
            LogViewerWidget::class,
        ];
    }

    protected function getStyles(): array
    {
        return [
            //'my-package-styles' => __DIR__ . '/../dist/app.css',
        ];
    }

    protected function getScripts(): array
    {
        return [
            'my-package-scripts' => __DIR__ . '/../dist/app.js',
        ];
    }

    protected function getScriptData(): array
    {
        return [
            //'userId' => Auth::id(),
        ];
    }

    protected function getCommands(): array
    {
        return [
            //Commands\CustomCommand::class,
        ];
    }
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
