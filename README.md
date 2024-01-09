# Dimmer

[![Latest Version on Packagist](https://img.shields.io/packagist/v/awcodes/dimmer.svg?style=flat-square)](https://packagist.org/packages/awcodes/dimmer)
[![Total Downloads](https://img.shields.io/packagist/dt/awcodes/dimmer.svg?style=flat-square)](https://packagist.org/packages/awcodes/dimmer)

![dimmer](https://github.com/awcodes/dimmer/assets/3596800/88aeda63-7ad3-448c-b6d5-526c5620747f)

Dimmer is a simple package to easily add a light/dark/system mode switcher to your Laravel app.

## Requirements

- Alpine JS
- Tailwind CSS

## Installation

You can install the package via composer:

```bash
composer require awcodes/dimmer
```

Next, you need to add the views to your `tailwind.config.js` file:

```js
content: [
    './vendor/awcodes/dimmer/resources/views/**/*.blade.php',
]
```

Optionally (not recommended), you can publish the views using

```bash
php artisan vendor:publish --tag="dimmer-views"
```

You can also update the translations by publishing the lang files:

```bash
php artisan vendor:publish --tag="dimmer-translations"
```

## Usage

Just include the `dimmer` component in your layout or anywhere you would to use it.

```html
<x-dimmer::controls />
```

### Forcing a default mode

Should you wish to force a default mode for when a user first visits the site, you can do so by setting the `force-mode` attribute on the `dimmer` component. Without this attribute set, the default mode will be determined by the user's system preferences.

```html
<x-dimmer::controls force-mode="dark" />
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Adam Weston](https://github.com/awcodes)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
