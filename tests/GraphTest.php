<?php

namespace Spatie\Skeleton\Test;

use Spatie\SchemaOrg\Type;
use Spatie\SchemaOrg\Brand;
use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Schema;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\Organization;

class GraphTest extends TestCase
{
    /** @test */
    public function it_can_render_empty()
    {
        $graph = new Graph();

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_render_single_item()
    {
        $graph = new Graph();
        $graph->add(Schema::organization()->name('My Company'));

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_render_multiple_items()
    {
        $graph = new Graph();
        $graph->add(Schema::organization()->name('My Company'));
        $graph->add(Schema::product()->name('My Product'));

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"},{"@type":"Product","name":"My Product"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_manipulate_item()
    {
        $graph = new Graph();
        $graph->add(Schema::organization()->name('My Company'));
        $graph->get(Organization::class)->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_get_existing_or_new_item()
    {
        $graph = new Graph();
        $graph->getOrCreate(Organization::class)->name('My Company');
        $graph->getOrCreate(Organization::class)->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_link_items()
    {
        $graph = new Graph();
        $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
        $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_hide_items()
    {
        $graph = new Graph();
        $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
        $graph->hide(Organization::class);
        $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_again_hidden_items()
    {
        $graph = new Graph();
        $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
        $graph->hide(Organization::class);
        $graph->hide(Brand::class);
        $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');
        $graph->show(Organization::class);

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_forces_unique_items()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('The graph already has an item of type "%s".', Organization::class));

        $graph = new Graph();
        $graph->add(Schema::organization()->name('My Company'));
        $graph->add(Schema::organization()->name('My Company'));
    }

    /** @test */
    public function it_throws_exception_if_item_does_not_exist()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('The graph does not have an item of type "%s".', Organization::class));

        $graph = new Graph();
        $graph->get(Organization::class);
    }

    /** @test */
    public function it_forces_requested_type_to_be_instance_of_type_interface()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage(sprintf('The given type "%s" is not an instance of "%s".', 'organization', Type::class));

        $graph = new Graph();
        $graph->getOrCreate('organization');
    }

    /** @test */
    public function it_can_call_overloaded_schema_methods()
    {
        $graph = new Graph();
        $organization = $graph->organization();
        $organization->name('My Company');

        $this->assertInstanceOf(Organization::class, $organization);
        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"}]}</script>', $graph->toScript());
    }
}
