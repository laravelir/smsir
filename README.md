- [![Starts](https://img.shields.io/github/stars/laravelir/smsir?style=flat&logo=github)](https://github.com/laravelir/smsir/forks)
- [![Forks](https://img.shields.io/github/forks/laravelir/smsir?style=flat&logo=github)](https://github.com/laravelir/smsir/stargazers)
  [![Total Downloads](https://img.shields.io/packagist/dt/laravelir/smsir.svg?style=flat-square)](https://packagist.org/packages/laravelir/smsir)


# laravelir/smsir

ir sms services

### Installation

1. Run the command below to add this package:

```
composer require laravelir/smsir
```

2. Open your config/app.php and add the following to the providers array:

```php
Laravelir\SMSIR\Providers\SMSIRServiceProvider::class,
```

1. Run the command below to install the package:

```
php artisan smsir:install
```


## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Credits

- [miladimos](https://github.com/miladimos)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
