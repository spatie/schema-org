<?php

namespace Spatie\SchemaOrg\Tests;

use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Organization;
use Spatie\SchemaOrg\Schema;

it('can manipulate item', function () {
    $graph = new Graph();
    $graph->add(Schema::organization());
    $graph->get(Organization::class)->name('My Company');
    $graph->get(Organization::class, Graph::IDENTIFIER_DEFAULT)->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>'
    );
});

it('can get existing or new item', function () {
    $graph = new Graph();
    $graph->getOrCreate(Organization::class)->name('My Company');
    $graph->getOrCreate(Organization::class, Graph::IDENTIFIER_DEFAULT)->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>'
    );
});

it('can link items', function () {
    $graph = new Graph();
    $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
    $graph->getOrCreate(Organization::class, Graph::IDENTIFIER_DEFAULT)->name('My Company')->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>'
    );
});

it('can hide single items', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->organization('astrotomic')->name('astrotomic');
    $graph->hide(Organization::class, 'astrotomic');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"}]}</script>'
    );
});

it('can hide all items', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->organization('astrotomic')->name('astrotomic');
    $graph->hide(Organization::class, null);
    $graph->product()->brand($graph->organization('spatie'));

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can show all items', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->organization('astrotomic')->name('astrotomic');
    $graph->hide(Organization::class, null);
    $graph->product()->brand($graph->organization('spatie'));
    $graph->show(Organization::class, null);

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Organization","name":"astrotomic"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can show single item if everything is hidden', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->organization('astrotomic')->name('astrotomic');
    $graph->hide(Organization::class, null);
    $graph->product()->brand($graph->organization('spatie'));
    $graph->show(Organization::class, 'spatie');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can hide single item if everything is shown', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->organization('astrotomic')->name('astrotomic');
    $graph->show(Organization::class, null);
    $graph->product()->brand($graph->organization('spatie'));
    $graph->hide(Organization::class, 'astrotomic');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can show single item if everything is shown', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->show(Organization::class, null);
    $graph->product()->brand($graph->organization('spatie'));
    $graph->show(Organization::class, 'spatie');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can show single item', function () {
    $graph = new Graph();
    $graph->organization('spatie')->name('spatie');
    $graph->show(Organization::class, 'spatie');
    $graph->product()->brand($graph->organization('spatie'));

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can show single item before it was created', function () {
    $graph = new Graph();
    $graph->hide(Organization::class, null);
    $graph->show(Organization::class, 'spatie');
    $graph->organization('spatie')->name('spatie');
    $graph->product()->brand($graph->organization('spatie'));

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https://schema.org","@graph":[{"@type":"Organization","name":"spatie"},{"@type":"Product","brand":{"@type":"Organization","name":"spatie"}}]}</script>'
    );
});

it('can be used as array', function () {
    $graph = new Graph();
    $graph->organization()->name('organization');
    $graph->organization('spatie')->name('spatie');

    expect(isset($graph[Organization::class]))->toBeTrue();
    expect(isset($graph[Organization::class.'.'.Graph::IDENTIFIER_DEFAULT]))->toBeTrue();
    expect(isset($graph[Organization::class.'.spatie']))->toBeTrue();
    expect(isset($graph[Organization::class.'.astrotomic']))->toBeFalse();

    expect($graph[Organization::class]['name'])->toBe('organization');
    expect($graph[Organization::class.'.'.Graph::IDENTIFIER_DEFAULT]['name'])->toBe('organization');
    expect($graph[Organization::class.'.spatie']['name'])->toBe('spatie');

    $graph[Organization::class.'.astrotomic'] = Schema::organization()->name('astrotomic');
    expect(isset($graph[Organization::class.'.astrotomic']))->toBeTrue();
    expect($graph[Organization::class.'.astrotomic']['name'])->toBe('astrotomic');

    unset($graph[Organization::class.'.astrotomic']);
    expect(isset($graph[Organization::class.'.astrotomic']))->toBeFalse();

    $graph['astrotomic'] = Schema::organization()->name('astrotomic');
    expect(isset($graph[Organization::class.'.astrotomic']))->toBeTrue();
    expect($graph[Organization::class.'.astrotomic']['name'])->toBe('astrotomic');
});
