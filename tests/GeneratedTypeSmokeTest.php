<?php

namespace Spatie\SchemaOrg\Tests;

use Spatie\SchemaOrg\LocalBusiness;
use Spatie\SchemaOrg\Schema;
use Spatie\SchemaOrg\Type;

it('is initializable', function () {
    expect(new LocalBusiness())->toBeInstanceOf(Type::class);
});

it('can be created from a factory method', function () {
    expect(Schema::localBusiness())->toBeInstanceOf(LocalBusiness::class);
});

it('can be rendered with properties', function () {
    $localBusiness = Schema::localBusiness()
        ->name('Spatie')
        ->email('info@spatie.be');

    $expected = '<script type="application/ld+json">'.
        '{"@context":"https://schema.org","@type":"LocalBusiness","name":"Spatie","email":"info@spatie.be"}'.
        '</script>';

    expect($localBusiness->toScript())->toBe($expected);
});

it('can be rendered with child properties', function () {
    $localBusiness = Schema::localBusiness()
        ->name('Spatie')
        ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'));

    $expected = '<script type="application/ld+json">'.
        '{"@context":"https://schema.org","@type":"LocalBusiness","name":"Spatie",'.
        '"contactPoint":{"@type":"ContactPoint","areaServed":"Worldwide"}}'.
        '</script>';

    expect($localBusiness->toScript())->toBe($expected);
});
