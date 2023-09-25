<?php

namespace Rabol\FilamentLogviewer;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Filament\Support\Assets\Theme;
use Filament\Support\Color;
use Filament\Support\Facades\FilamentAsset;

class FilamentLogviewerTheme implements Plugin
{
    public function getId(): string
    {
        return 'filament-logviewer';
    }

    public function register(Panel $panel): void
    {
        FilamentAsset::register([
            Theme::make('filament-logviewer', __DIR__.'/../resources/css/dist/filament-logviewer.css'),
        ]);

        $panel
            ->font('DM Sans')
            ->primaryColor(Color::Amber)
            ->secondaryColor(Color::Gray)
            ->warningColor(Color::Amber)
            ->dangerColor(Color::Rose)
            ->successColor(Color::Green)
            ->grayColor(Color::Gray)
            ->theme('filament-logviewer');
    }

    public function boot(Panel $panel): void
    {
        //
    }
}
