# A fluent Schema.org helper and ld+json generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/schema-org.svg?style=flat-square)](https://packagist.org/packages/spatie/schema-org)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/spatie/schema-org/master.svg?style=flat-square)](https://travis-ci.org/spatie/schema-org)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/xxxxxxxxx.svg?style=flat-square)](https://insight.sensiolabs.com/projects/xxxxxxxxx)
[![Quality Score](https://img.shields.io/scrutinizer/g/spatie/schema-org.svg?style=flat-square)](https://scrutinizer-ci.com/g/spatie/schema-org)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/schema-org.svg?style=flat-square)](https://packagist.org/packages/spatie/schema-org)

`spatie/schema-org` provides a fluent builder for **all** Schema.org types and their properties. The code in `src` is generated from Schema.org's [RFDa standards file](https://github.com/schemaorg/schemaorg/blob/sdo-callisto/data/schema.rdfa), so it provides objects and methods for the entire core vocabulary. The classes and methods are also fully documented as a quick reference.

```php
use Spatie\SchemaOrg\Schema;

$localBusiness = Schema::localBusiness()
    ->name('Spatie')
    ->email('info@spatie.be')
    ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'));

$localBusiness->toScript();
```

```html
<script type="application/ld+json">
{
    "@context": "http:\/\/schema.org",
    "@type": "LocalBusiness",
    "name": "Spatie",
    "email": "info@spatie.be"
    "contactPoint": {
        "@type":"ContactPoint",
        "areaServed":"Worldwide"
    }
}
</script>
```

## Postcardware

You're free to use this package (it's [MIT-licensed](LICENSE.md)), but if it makes it to your production environment we highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using.

Our address is: Spatie, Samberstraat 69D, 2060 Antwerp, Belgium.

The best postcards will get published on the open source page on our website.

## Installation

**Note:** Remove this paragraph if you are building a public package  
This package is custom built for [Spatie](https://spatie.be) projects and is therefore not registered on packagist. In order to install it via composer you must specify this extra repository in `composer.json`:

```json
"repositories": [ { "type": "composer", "url": "https://satis.spatie.be/" } ]
```

You can install the package via composer:

``` bash
composer require spatie/schema-org
```

## Usage

``` php
$skeleton = new Spatie\Skeleton();
echo $skeleton->echoPhrase('Hello, Spatie!');
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email freek@spatie.be instead of using the issue tracker.

## Credits

- [Sebastian De Deyne](https://github.com/sebastiandedeyne)
- [All Contributors](../../contributors)

## About Spatie
Spatie is a webdesign agency based in Antwerp, Belgium. You'll find an overview of all our open source projects [on our website](https://spatie.be/opensource).

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
