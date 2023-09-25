<?php

namespace Rabol\FilamentLogviewer;

use Filament\PluginServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Gate;
use Filament\Support\Facades\FilamentIcon;
use Filament\Support\Facades\FilamentAsset;
use Rabol\FilamentLogviewer\Commands\FilamentLogviewerCommand;
use Rabol\FilamentLogviewer\Models\LogFile;
use Rabol\FilamentLogviewer\Pages\LogViewerPage;
use Rabol\FilamentLogviewer\Policies\LogFilePolicy;
use Rabol\FilamentLogviewer\Testing\TestsFilamentLogviewer;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Rabol\FilamentLogviewer\Pages\LogViewerViewLogPage;
use Rabol\FilamentLogviewer\Pages\LogViewerViewDetailsPage;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use VendorName\Skeleton\Commands\SkeletonCommand;
use VendorName\Skeleton\Testing\TestsSkeleton;


class FilamentLogviewerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-log-viewer';

    public static string $viewNamespace = 'filament-log-viewer';


/**
	 *
	 * @param \Spatie\LaravelPackageTools\Package $package
	 * @return void
	 */
	public function configurePackage(Package $package)
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

        //if (file_exists($package->basePath('/../database/migrations'))) {
        //    $package->hasMigrations($this->getMigrations());
        //}

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

            $model_class = config('filament-logviewer::filament-logviewer.user_class', '\Rabol\\FilamentLogviewer\\Models\\LogFile::class');
        $policy_class = config('filament-logviewer::filament-logviewer.user_class', 'Rabol\\FilamentLogviewer\\Policies\\LogFilePolicy');

        Gate::policy($model_class, $policy_class);


        // Testing
        Testable::mixin(new TestsFilamentLogviewer());
    }


    protected function getAssetPackageName(): ?string
    {
        return 'rabol/filament-log-viewer';
    }


     /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-log-viewer-styles', __DIR__ . '/../resources/dist/filament-logviewer.css'),
        ];
    }

    protected function getCommands(): array
    {
        return [
            FilamentLogviewerCommand::class,
        ];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }

    /************** old..... chcek  */

    /**
     * getPages
     *
     * @return array
     */
    protected function getPages(): array
    {
        //return [
        //    LogViewerPage::class,
        //    LogViewerViewLogPage::class,
        //    LogViewerViewDetailsPage::class,
        //];
    }

    /**
     * getStyles
     *
     * @return array
     */
    protected function getStyles(): array
    {
        //return [
        //    'filament-log-viewer-styles' => __DIR__ . '/../resources/css/dist/filament-logviewer.css',
        //];
    }

    /**
     * registerPolicies
     *
     * @return void
     */
    //public function registerPolicies(): void
    //{
    //    $model_class = config('filament-logviewer::filament-logviewer.user_class', '\Rabol\\FilamentLogviewer\\Models\\LogFile::class');
    //    $policy_class = config('filament-logviewer::filament-logviewer.user_class', 'Rabol\\FilamentLogviewer\\Policies\\LogFilePolicy');
    //
    //    Gate::policy($model_class, $policy_class);
    //}

    /**
     * boot
     *
     * @return void
     */
    //public function boot(): void
    //{
    //    parent::boot();
    //
    //    $this->registerPolicies();
    //}






}
