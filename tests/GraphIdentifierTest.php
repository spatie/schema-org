<?php

namespace Spatie\SchemaOrg\Tests;

use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Organization;
use Spatie\SchemaOrg\Schema;

class GraphIdentifierTest extends TestCase
{
    /** @test */
    public function it_can_manipulate_item()
    {
        $graph = new Graph();
        $graph->add(Schema::organization());
        $graph->get(Organization::class)->name('My Company');
        $graph->get(Organization::class, Graph::IDENTIFIER_DEFAULT)->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_get_existing_or_new_item()
    {
        $graph = new Graph();
        $graph->getOrCreate(Organization::class)->name('My Company');
        $graph->getOrCreate(Organization::class, Graph::IDENTIFIER_DEFAULT)->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_link_items()
    {
        $graph = new Graph();
        $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
        $graph->getOrCreate(Organization::class, Graph::IDENTIFIER_DEFAULT)->name('My Company')->email('contact@example.com');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_hide_single_items()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->organization('astrotomic')->name('astrotomic');
        $graph->hide(Organization::class, 'astrotomic');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_hide_all_items()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->organization('astrotomic')->name('astrotomic');
        $graph->hide(Organization::class, null);
        $graph->product()->brand($graph->organization('spatie'));

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_all_items()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->organization('astrotomic')->name('astrotomic');
        $graph->hide(Organization::class, null);
        $graph->product()->brand($graph->organization('spatie'));
        $graph->show(Organization::class, null);

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Organization","name":"astrotomic"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_single_item_if_everything_is_hidden()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->organization('astrotomic')->name('astrotomic');
        $graph->hide(Organization::class, null);
        $graph->product()->brand($graph->organization('spatie'));
        $graph->show(Organization::class, 'spatie');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_hide_single_item_if_everything_is_shown()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->organization('astrotomic')->name('astrotomic');
        $graph->show(Organization::class, null);
        $graph->product()->brand($graph->organization('spatie'));
        $graph->hide(Organization::class, 'astrotomic');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_single_item_if_everything_is_shown()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->show(Organization::class, null);
        $graph->product()->brand($graph->organization('spatie'));
        $graph->show(Organization::class, 'spatie');

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_single_item()
    {
        $graph = new Graph();
        $graph->organization('spatie')->name('spatie');
        $graph->show(Organization::class, 'spatie');
        $graph->product()->brand($graph->organization('spatie'));

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_show_single_item_before_it_was_created()
    {
        $graph = new Graph();
        $graph->hide(Organization::class, null);
        $graph->show(Organization::class, 'spatie');
        $graph->organization('spatie')->name('spatie');
        $graph->product()->brand($graph->organization('spatie'));

        $this->assertEquals('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>', $graph->toScript());
    }

    /** @test */
    public function it_can_be_used_as_array()
    {
        $graph = new Graph();
        $graph->organization()->name('organization');
        $graph->organization('spatie')->name('spatie');

        $this->assertTrue(isset($graph[Organization::class]));
        $this->assertTrue(isset($graph[Organization::class.'.'.Graph::IDENTIFIER_DEFAULT]));
        $this->assertTrue(isset($graph[Organization::class.'.spatie']));
        $this->assertFalse(isset($graph[Organization::class.'.astrotomic']));

        $this->assertEquals('organization', $graph[Organization::class]['name']);
        $this->assertEquals('organization', $graph[Organization::class.'.'.Graph::IDENTIFIER_DEFAULT]['name']);
        $this->assertEquals('spatie', $graph[Organization::class.'.spatie']['name']);

        $graph[Organization::class.'.astrotomic'] = Schema::organization()->name('astrotomic');
        $this->assertTrue(isset($graph[Organization::class.'.astrotomic']));
        $this->assertEquals('astrotomic', $graph[Organization::class.'.astrotomic']['name']);

        unset($graph[Organization::class.'.astrotomic']);
        $this->assertFalse(isset($graph[Organization::class.'.astrotomic']));

        $graph['astrotomic'] = Schema::organization()->name('astrotomic');
        $this->assertTrue(isset($graph[Organization::class.'.astrotomic']));
        $this->assertEquals('astrotomic', $graph[Organization::class.'.astrotomic']['name']);
    }
}
