![Logo](https://banners.beyondco.de/Filament%20Log%20Viewer.png?theme=light&packageManager=composer+require&packageName=rabol%2Ffilament-logviewer&pattern=architect&style=style_1&description=Simple+log+viewer+for+Filament+TALL+admin+panel&md=1&showWatermark=1&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

# Logviewer for Filament admin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/rabol/filament-logviewer.svg?style=flat-square)](https://packagist.org/packages/rabol/filament-logviewer)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/rabol/filament-logviewer/run-tests?label=tests)](https://github.com/rabol/filament-logviewer/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/rabol/filament-logviewer/Check%20&%20fix%20styling?label=code%20style)](https://github.com/rabol/filament-logviewer/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/rabol/filament-logviewer.svg?style=flat-square)](https://packagist.org/packages/rabol/filament-logviewer)

Log viewer for Filament, The elegant TALLkit for Laravel artisans.

## Installation

You can install the package via composer:

```bash
composer require rabol/filament-logviewer
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-logviewer-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-logviewer-views"
```

This is the contents of the published config file:

```php

// config for Rabol/FilamentLogviewer
return [
    'navigation_group' => 'System',
];

```
## Usage

Add the `Rabol\FilamentLogviewer\FilamentLogviewerPlugin` to your panel config.

```php
use Rabol\FilamentLogviewer\FilamentLogviewerPlugin;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ...
            ->plugin(
                FilamentLogviewerPlugin::make()
            );
    }
}
```


## Note
This package uses [calebporzio/sushi](https://github.com/calebporzio/sushi) package, which relies on sqlite

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Steen Rabol](https://github.com/rabol)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
