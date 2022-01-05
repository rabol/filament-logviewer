<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Gate;
use Rabol\FilamentLogviewer\Models\LogFile;
use Rabol\FilamentLogviewer\Pages\LogViewerPage;
use Rabol\FilamentLogviewer\Policies\LogFilePolicy;
use Rabol\FilamentLogviewer\Pages\LogViewerViewLogPage;
use Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage;

class FilamentLogviewerServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-log-viewer';

    protected $policies = [
        LogFile::class => LogFilePolicy::class,
    ];


    protected function getPages(): array
    {
        return [
            LogViewerPage::class,
            LogViewerViewLogPage::class,
            LogViewerViewDetailsPage::class,
        ];
    }

    protected function getStyles(): array
    {
        return [
            'filament-log-viewer-styles' => __DIR__ . '/../resources/css/dist/filament-logviewer.css',
        ];
    }

    public function registerPolicies()
    {
        foreach ($this->policies as $key => $value) {
            Gate::policy($key, $value);
        }
    }

    public function boot()
    {
        parent::boot();
    }
}
