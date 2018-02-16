# FreeGeo PHP Client

[![Build Status](https://img.shields.io/travis/faustbrian/FreeGeo-PHP-Client/master.svg?style=flat-square)](https://travis-ci.org/faustbrian/FreeGeo-PHP-Client)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/faustbrian/freegeo-php-client.svg?style=flat-square)]()
[![Latest Version](https://img.shields.io/github/release/faustbrian/FreeGeo-PHP-Client.svg?style=flat-square)](https://github.com/faustbrian/FreeGeo-PHP-Client/releases)
[![License](https://img.shields.io/packagist/l/faustbrian/FreeGeo-PHP-Client.svg?style=flat-square)](https://packagist.org/packages/faustbrian/FreeGeo-PHP-Client)

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```bash
$ composer require faustbrian/freegeo-php-client
```

## Usage

```php
$client = new BrianFaust\FreeGeo\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
