<?php

namespace Spatie\SchemaOrg\Tests;

use BadMethodCallException;
use InvalidArgumentException;
use Spatie\SchemaOrg\Brand;
use Spatie\SchemaOrg\Graph;
use Spatie\SchemaOrg\Organization;
use Spatie\SchemaOrg\Product;
use Spatie\SchemaOrg\Schema;
use Spatie\SchemaOrg\Type;

it('can render empty', function () {
    $graph = new Graph();

    expect((string) $graph)->toBe('<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[]}</script>');
});

it('can render single item', function () {
    $graph = new Graph();
    $graph->add(Schema::organization()->name('My Company'));

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"}]}</script>'
    );
});

it('can render multiple items', function () {
    $graph = new Graph();
    $graph->add(Schema::organization()->name('My Company'));
    $graph->add(Schema::product()->name('My Product'));

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"},{"@type":"Product","name":"My Product"}]}</script>'
    );
});

it('can manipulate item', function () {
    $graph = new Graph();
    $graph->add(Schema::organization()->name('My Company'));
    $graph->get(Organization::class)->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>'
    );
});

it('can get existing or new item', function () {
    $graph = new Graph();
    $graph->getOrCreate(Organization::class)->name('My Company');
    $graph->getOrCreate(Organization::class)->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"}]}</script>'
    );
});

it('can link items', function () {
    $graph = new Graph();
    $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
    $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>'
    );
});

it('can hide items', function () {
    $graph = new Graph();
    $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
    $graph->hide(Organization::class);
    $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>'
    );
});

it('can show again hidden items', function () {
    $graph = new Graph();
    $graph->set(Schema::product()->brand($graph->getOrCreate(Organization::class)));
    $graph->hide(Organization::class);
    $graph->hide(Brand::class);
    $graph->getOrCreate(Organization::class)->name('My Company')->email('contact@example.com');
    $graph->show(Organization::class);

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","email":"contact@example.com"},{"@type":"Product","brand":{"@type":"Organization","name":"My Company","email":"contact@example.com"}}]}</script>'
    );
});

it('forces unique items', function () {
    $graph = new Graph();
    $graph->add(Schema::organization()->name('My Company'));
    $graph->add(Schema::organization()->name('My Company'));
})->throws(
    InvalidArgumentException::class,
    sprintf(
        'The graph already has an item of type "%s" with identifier "%s".',
        Organization::class,
        Graph::IDENTIFIER_DEFAULT
    )
);

it('throws exception if item does not exist', function () {
    $graph = new Graph();
    $graph->get(Organization::class);
})->throws(
    InvalidArgumentException::class,
    sprintf(
        'The graph does not have an item of type "%s" with identifier "%s".',
        Organization::class,
        Graph::IDENTIFIER_DEFAULT
    )
);

it('forces requested type to be instance of type interface', function () {
    $graph = new Graph();
    $graph->getOrCreate('organization');
})->throws(
    InvalidArgumentException::class,
    sprintf('The given type "%s" is not an instance of "%s".', 'organization', Type::class)
);

it('can call overloaded schema methods', function () {
    $graph = new Graph();
    $organization = $graph->organization();
    $organization->name('My Company');

    expect($organization)->toBeInstanceOf(Organization::class);
    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"}]}</script>'
    );
});

it('can call overloaded schema methods with callback', function () {
    $graph = (new Graph())
        ->organization(function (Organization $organization) {
            $organization->name('My Company');
        });

    expect($graph)->toBeInstanceOf(Graph::class);
    expect($graph->organization())->toBeInstanceOf(Organization::class);
    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company"}]}</script>'
    );
});

it('can call overloaded schema methods with callback multiple times', function () {
    $graph = (new Graph())
        ->organization(function (Organization $organization) {
            $organization->name('My Company');
        })
        ->organization(function (Organization $organization) {
            $organization->description('This is my awesome Company.');
        });

    expect($graph)->toBeInstanceOf(Graph::class);
    expect($graph->organization())->toBeInstanceOf(Organization::class);
    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Organization","name":"My Company","description":"This is my awesome Company."}]}</script>'
    );
});

it('can call overloaded schema methods with callback and access schemas in child', function () {
    $graph = (new Graph())
        ->product(function (Product $product, Graph $graph) {
            $product
                ->name('My Product')
                ->brand($graph->organization());
        })
        ->organization(function (Organization $organization) {
            return $organization->name('My Company');
        })
        ->hide(Organization::class);

    expect($graph)->toBeInstanceOf(Graph::class);
    expect($graph->organization())->toBeInstanceOf(Organization::class);
    expect($graph->product())->toBeInstanceOf(Product::class);
    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"Product","name":"My Product","brand":{"@type":"Organization","name":"My Company"}}]}</script>'
    );
});

it('throws exception if method does not exist', function () {
    $graph = new Graph();
    $graph->foobar();
})->throws(
    BadMethodCallException::class,
    sprintf('The method "%s" does not exist on class "%s".', 'foobar', Graph::class)
);

it('can do things conditionally', function () {
    $graph = new Graph();
    $graph->if(true, function (Graph $graph) {
        $graph->organization()->name('spatie');
    });
    $graph->if(false, function (Graph $graph) {
        $graph->organization()->name('organization');
    });

    expect($graph->organization()['name'])->toBe('spatie');
    expect($graph->organization()['name'])->not()->toBe('organization');
});

it('can use references', function () {
    $graph = new Graph();

    $graph->blogPosting()
        ->identifier('https://example.com/blog/my-post/#blogPosting')
        ->author($graph->organization()->name('organization')->referenced())
        ->publisher($graph->organization()->url('https://example.com')->referenced());

    $graph->organization()
        ->identifier('https://example.com/#organization')
        ->email('contact@example.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"BlogPosting","author":{"@id":"https:\/\/example.com\/#organization"},"publisher":{"@id":"https:\/\/example.com\/#organization"},"@id":"https:\/\/example.com\/blog\/my-post\/#blogPosting"},{"@type":"Organization","name":"organization","url":"https:\/\/example.com","email":"contact@example.com","@id":"https:\/\/example.com\/#organization"}]}</script>'
    );
});

it('can be initialized with different context', function () {
    $graph = new Graph('https://foobar.com');

    expect($graph->getContext())->toBe('https://foobar.com');

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":"https:\/\/foobar.com","@graph":[]}</script>'
    );
});

it('can be initialized with complex context', function () {
    $graph = new Graph([
        '@vocab' => 'https://schema.org/',
        '@base' => 'https://domain.com/',
    ]);

    expect($graph->getContext())->toBe([
        '@vocab' => 'https://schema.org/',
        '@base' => 'https://domain.com/',
    ]);

    expect($graph->toScript())->toBe(
        '<script type="application/ld+json">{"@context":{"@vocab":"https:\/\/schema.org\/","@base":"https:\/\/domain.com\/"},"@graph":[]}</script>'
    );
});
