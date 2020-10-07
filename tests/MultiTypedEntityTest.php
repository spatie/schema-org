<?php

namespace Spatie\SchemaOrg\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\MultiTypedEntity;
use Spatie\SchemaOrg\Product;
use Spatie\SchemaOrg\Schema;

class MultiTypedEntityTest extends TestCase
{
    /** @test */
    public function it_can_render_empty()
    {
        $mte = new MultiTypedEntity();

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":[]}</script>', (string) $mte);
    }

    /** @test */
    public function it_can_render_single_item()
    {
        $mte = new MultiTypedEntity();
        $mte->hotelRoom()->name('The Presidential Suite');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":["HotelRoom"],"name":"The Presidential Suite"}</script>', $mte->toScript());
    }

    /** @test */
    public function it_can_render_multiple_items()
    {
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

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":["HotelRoom","Product"],"name":"The Presidential Suite","offers":{"@type":"Offer","name":"One Night","price":100000,"priceCurrency":"USD"},"aggregateRating":{"@type":"AggregateRating","bestRating":5,"worstRating":4}}</script>', $mte->toScript());
    }
}
