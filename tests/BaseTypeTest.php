<?php

namespace Spatie\SchemaOrg\Tests;

use DateTime;
use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Exceptions\InvalidProperty;
use Spatie\SchemaOrg\Product;
use Spatie\SchemaOrg\PropertyValue;

it('has a default context', function () {
    $type = new DummyType();

    expect($type->getContext())->toBe('https://schema.org');
});

it('can infer its type name from the class name', function () {
    $type = new DummyType();

    expect($type->getType())->toBe('DummyType');

    $anotherType = new AnotherDummyType();

    expect($anotherType->getType())->toBe('AnotherDummyType');
});

it('can set and retrieve a property', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    expect($type->getProperties())->toBe(['foo' => 'bar']);
});

it('can not set a null value"', function () {
    $type = new DummyType();

    $type->setProperty('foo', null);

    expect($type->getProperties())->toBe([]);
});

it('can conditionally set and retrieve a property', function () {
    $type = new DummyType();

    $type->if(true, function (DummyType $type) {
        $type->setProperty('foo', 'bar');
    });

    $type->if(false, function (DummyType $type) {
        $type->setProperty('baz', 'qux');
    });

    expect($type->getProperties())->toBe(['foo' => 'bar']);
});

it('can add multiple properties at once', function () {
    $type = new DummyType();

    $type->addProperties([
        'foo' => 'bar',
        'baz' => 'qux',
    ]);

    expect($type->getProperties())->toBe([
        'foo' => 'bar',
        'baz' => 'qux',
    ]);
});

it('can create an array that conforms to the ld json spec with primitive properties', function () {
    $type = new DummyType();

    $type->setProperty('string', 'Hi');
    $type->setProperty('array', ['Yo']);
    $type->setProperty('number', 5);
    $type->setProperty('boolean', true);

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'string' => 'Hi',
        'array' => ['Yo'],
        'number' => 5,
        'boolean' => true,
    ];

    expect($type->toArray())->toBe($expected);
});

it('can create an array that conforms to the ld json spec with datetimes', function () {
    $type = new DummyType();

    $type->setProperty('dateCreated', DateTime::createFromFormat(DateTime::ATOM, '2017-01-01T00:00:00+0000'));

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'dateCreated' => '2017-01-01T00:00:00+00:00',
    ];

    expect($type->toArray())->toBe($expected);
});

it('can create an array that conforms to the ld json spec with nested types', function () {
    $type = new DummyType();
    $child = new DummyType();

    $child->setProperty('foo', 'bar');

    $type->setProperty('child', $child);

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'child' => [
            '@type' => 'DummyType',
            'foo' => 'bar',
        ],
    ];

    expect($type->toArray())->toBe($expected);
});

it('can create an array that conforms to the ld json spec with an array of types', function () {
    $type = new DummyType();

    $child1 = new DummyType();
    $child1->setProperty('foo', 'bar');

    $child2 = new DummyType();
    $child2->setProperty('foo', 'baz');

    $type->setProperty('children', [$child1, $child2]);

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'children' => [
            [
                '@type' => 'DummyType',
                'foo' => 'bar',
            ], [
                '@type' => 'DummyType',
                'foo' => 'baz',
            ],
        ],
    ];

    expect($type->toArray())->toBe($expected);
});

it('can create an ld json script tag', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    $expected = '<script type="application/ld+json">'.
        '{"@context":"https:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

    expect($type->toScript())->toBe($expected);
});

it('can create an ld json script tag with nonce attribute', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    $type->setNonce('baz');

    $expected = '<script type="application/ld+json" nonce="baz">'.
        '{"@context":"https:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

    expect($type->toScript())->toBe($expected);
});

it('can set a property via a magic call method', function () {
    $type = new DummyType();

    $type->foo('bar');

    expect($type->getProperties())->toBe(['foo' => 'bar']);
});

it('can use array access to set a property', function () {
    $type = new DummyType();

    $type['foo'] = 'bar';

    expect($type->getProperties())->toBe(['foo' => 'bar']);
});

it('can use array access to unset a property', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');
    $type->setProperty('bar', 'baz');
    unset($type['foo']);

    expect($type->getProperties())->toBe(['bar' => 'baz']);
});

it('can use array access to determine if a property exists', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    expect(isset($type['foo']))->toBeTrue();
    expect(isset($type['bar']))->toBeFalse();
});

it('can use array access to get a property', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    expect($type['foo'])->toBe('bar');
});

it('can be json serialized', function () {
    $child = new DummyType();
    $child->setProperty('bar', 'baz');

    $type = new DummyType();
    $type->setProperty('foo', 'bar');
    $type->setProperty('child', $child);
    $type->setProperty('array', [
        'child' => $child,
        'hello' => 'world',
    ]);
    $type->setProperty('string', new class () {
        public function __toString()
        {
            return 'lorem ipsum';
        }
    });

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'foo' => 'bar',
        'child' => [
            '@type' => 'DummyType',
            'bar' => 'baz',
        ],
        'array' => [
            'child' => [
                '@type' => 'DummyType',
                'bar' => 'baz',
            ],
            'hello' => 'world',
        ],
        'string' => 'lorem ipsum',
    ];

    expect($type->jsonSerialize())->toBe($expected);
    expect(json_encode($type))->toBe(json_encode($expected));
});

it('will throw invalid property exception with object property', function () {
    $type = new DummyType();
    $type->setProperty('foo', new class () {
    });

    $type->jsonSerialize();
})->throws(InvalidProperty::class);

it('can be casted to string', function () {
    $type = new DummyType();

    $type->setProperty('foo', 'bar');

    $expected = '<script type="application/ld+json">'.
        '{"@context":"https:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

    expect((string) $type)->toBe($expected);
});

it('replaces identifier with at id property', function () {
    $type = new DummyType();

    $type->setProperty('identifier', 'object#1');

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        '@id' => 'object#1',
    ];

    expect($type->toArray())->toBe($expected);
});

it('can render identifier for typed identifiers', function () {
    $productType = new Product();
    $propertyValue = new PropertyValue();
    $propertyValue->identifier('#1');
    $productType->setProperty('identifier', $propertyValue);

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'Product',
        'identifier' => [
            '@type' => 'PropertyValue',
            '@id' => '#1',
        ],
    ];

    expect($productType->toArray())->toBe($expected);
});

it('can reference type by identifier', function () {
    $type1 = new AnotherDummyType();
    $type1->setProperty('identifier', '#1');
    $type1->setProperty('name', 'another-object');
    $type2 = new DummyType();
    $type2->setProperty('identifier', '#2');
    $type1->setProperty('name', 'object');
    $type2->setProperty('referenced', $type1->referenced());

    $expected = [
        '@context' => 'https://schema.org',
        '@type' => 'DummyType',
        'referenced' => [
            '@id' => '#1',
        ],
        '@id' => '#2',
    ];

    expect($type2->toArray())->toBe($expected);
});

class DummyType extends BaseType
{
}

class AnotherDummyType extends BaseType
{
}
