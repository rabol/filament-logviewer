<?php

namespace Rabol\FilamentLogviewer;

use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Support\Facades\Gate;
use Livewire\Features\SupportTesting\Testable;
use Rabol\FilamentLogviewer\Commands\FilamentLogviewerCommand;
use Rabol\FilamentLogviewer\Testing\TestsFilamentLogviewer;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentLogviewerServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-logviewer';

    public static string $viewNamespace = 'filament-logviewer';

    public function configurePackage(Package $package): void
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
                    ->askToStarRepoOnGitHub('rabol/filament-logviewer');
            });

        if (file_exists($package->basePath('/config/filament-log-viewer.php'))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
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
        return 'rabol/filament-logviewer';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [
            Css::make('filament-logviewer-styles', __DIR__.'/../resources/css/dist/filament-logviewer.css'),
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
}
