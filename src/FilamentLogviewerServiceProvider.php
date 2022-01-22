<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Log;
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

    /**
     * getPages
     *
     * @return array
     */
    protected function getPages(): array
    {
        return [
            LogViewerPage::class,
            LogViewerViewLogPage::class,
            LogViewerViewDetailsPage::class,
        ];
    }

    /**
     * getStyles
     *
     * @return array
     */
    protected function getStyles(): array
    {
        return [
            'filament-log-viewer-styles' => __DIR__ . '/../resources/css/dist/filament-logviewer.css',
        ];
    }

    /**
     * registerPolicies
     *
     * @return void
     */
    public function registerPolicies(): void
    {
        $model_class = config('filament-logviewer::filament-logviewer.user_class', '\Rabol\\FilamentLogviewer\\Models\\LogFile::class');
        $policy_class = config('filament-logviewer::filament-logviewer.user_class', 'Rabol\\FilamentLogviewer\\Policies\\LogFilePolicy');

        Gate::policy($model_class, $policy_class);
    }

    /**
     * boot
     *
     * @return void
     */
    public function boot(): void
    {
        parent::boot();

        $this->registerPolicies();
    }
}
