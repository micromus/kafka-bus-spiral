# This is my package kafka-bus-spiral

[![PHP Version Require](https://poser.pugx.org/micromus/kafka-bus-spiral/require/php)](https://packagist.org/packages/micromus/kafka-bus-spiral)
[![Latest Stable Version](https://poser.pugx.org/micromus/kafka-bus-spiral/v/stable)](https://packagist.org/packages/micromus/kafka-bus-spiral)
[![phpunit](https://github.com/micromus/kafka-bus-spiral/actions/workflows/phpunit.yml/badge.svg)](https://github.com/micromus/kafka-bus-spiral/actions)
[![psalm](https://github.com/micromus/kafka-bus-spiral/actions/workflows/psalm.yml/badge.svg)](https://github.com/micromus/kafka-bus-spiral/actions)
[![Codecov](https://codecov.io/gh/micromus/kafka-bus-spiral/branch/master/graph/badge.svg)](https://codecov.io/gh/micromus/kafka-bus-spiral/)
[![Total Downloads](https://poser.pugx.org/micromus/kafka-bus-spiral/downloads)](https://packagist.org/micromus/kafka-bus-spiral/phpunit)


This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.


## Requirements

Make sure that your server is configured with following PHP version and extensions:

- PHP 8.1+
- Spiral framework 3.0+

## Installation

You can install the package via composer:

```bash
composer require micromus/kafka-bus-spiral
```

After package install you need to register bootloader from the package.

```php
protected const LOAD = [
    // ...
    \Micromus\KafkaBusSpiral\Bootloader\KafkaBusSpiralBootloader::class,
];
```

> Note: if you are using [`spiral-packages/discoverer`](https://github.com/spiral-packages/discoverer),
> you don't need to register bootloader by yourself.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Micromus](https://github.com/popkovkirill)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
