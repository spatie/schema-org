<?php

namespace Spatie\SchemaOrg\Tests;

use Spatie\SchemaOrg\MultiTypedEntity;
use Spatie\SchemaOrg\Product;
use Spatie\SchemaOrg\Schema;

it('can render empty', function () {
    $mte = new MultiTypedEntity();

    expect((string) $mte)->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@type":[]}</script>'
    );
});

it('can render single item', function () {
    $mte = new MultiTypedEntity();
    $mte->hotelRoom()->name('The Presidential Suite');

    expect($mte->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@type":["HotelRoom"],"name":"The Presidential Suite"}</script>'
    );
});

it('can render multiple items', function () {
    $mte = new MultiTypedEntity();
    $mte->hotelRoom()->name('The Presidential Suite');
    $mte->product()->offers(
        Schema::offer()
            ->name('One Night')
            ->price(100000.00)
            ->priceCurrency('USD')
    );
    $mte->product(function (Product $product) {
        $product->aggregateRating(
            Schema::aggregateRating()
                ->bestRating(5)
                ->worstRating(4)
        );
    });

    expect($mte->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@type":["HotelRoom","Product"],"name":"The Presidential Suite","offers":{"@type":"Offer","name":"One Night","price":100000,"priceCurrency":"USD"},"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":4}}</script>'
    );
});
