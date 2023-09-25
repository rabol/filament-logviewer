<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Filament\Support\Facades\FilamentIcon;
use Filament\Support\Facades\FilamentAsset;
use Rabol\FilamentLogviewer\Models\LogFile;
use Rabol\FilamentLogviewer\Pages\LogViewerPage;
use Rabol\FilamentLogviewer\Policies\LogFilePolicy;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabol\FilamentLogviewer\Pages\LogViewerViewLogPage;
use Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage;

class FilamentLogviewerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-log-viewer';


/*
    protected $policies = [
        //LogFile::class => LogFilePolicy::class,
        //LogFile::class => config('filament-logviewer::filament-logviewer.user_class', 'Rabol\\FilamentLogviewer\\Policies\\LogFilePolicy'),
    ];
*/
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
	/**
	 *
	 * @param \Spatie\LaravelPackageTools\Package $package
	 * @return void
	 */
	public function configurePackage(\Spatie\LaravelPackageTools\Package $package)
    {
	/*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasCommands($this->getCommands())
            ->hasInstallCommand(function (InstallCommand $command) {
                $command
                    ->publishConfigFile()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->askToStarRepoOnGitHub(':vendor_slug/:package_slug');
            });

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/{$configFileName}.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../database/migrations'))) {
            $package->hasMigrations($this->getMigrations());
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void
    {
    }

    public function packageBooted(): void
    {
        // Asset Registration
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );

        FilamentAsset::registerScriptData(
            $this->getScriptData(),
            $this->getAssetPackageName()
        );

        // Icon Registration
        FilamentIcon::register($this->getIcons());

        // Handle Stubs
        if (app()->runningInConsole()) {
            foreach (app(Filesystem::class)->files(__DIR__ . '/../stubs/') as $file) {
                $this->publishes([
                    $file->getRealPath() => base_path("stubs/skeleton/{$file->getFilename()}"),
                ], 'skeleton-stubs');
            }
        }

        // Testing
        //Testable::mixin(new TestsSkeleton());
    }
}
