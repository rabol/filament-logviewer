<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Rabol\FilamentLogviewer\Pages\LogViewerPage;
use Rabol\FilamentLogviewer\Pages\LogViewerViewLogPage;
use Rabol\FilamentLogviewer\Commands\FilamentLogviewerCommand;
use Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage;

class FilamentLogviewerServiceProvider extends PluginServiceProvider
{

    public static string $name = 'filament-log-viewer';
 
    protected function getPages(): array
    {
        return [
            LogViewerPage::class,
            LogViewerViewLogPage::class,
            LogViewerViewDetailsPage::class,
        ];
    }

    protected function getWidgets(): array
    {
        return [
            //LogViewerWidget::class,
        ];
    }

    protected function getStyles(): array
    {
        return [
            'filament-log-viewer-styles' => __DIR__ . '/../resources/css/dist/filament-logviewer.css',
        ];
    }

    protected function getScripts(): array
    {
        return [
        ];
    }

    protected function getScriptData(): array
    {
        return [
        ];
    }

    protected function getCommands(): array
    {
        return [];
    }

  
}
