<?php

namespace Spatie\SchemaOrg\Tests;

use DateTime;
use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\BaseType;
use Spatie\SchemaOrg\Exceptions\InvalidProperty;

class BaseTypeTest extends TestCase
{
    /** @test */
    public function it_has_a_default_context()
    {
        $type = new DummyType();

        $this->assertEquals('https://schema.org', $type->getContext());
    }

    /** @test */
    public function it_can_infer_its_type_name_from_the_class_name()
    {
        $type = new DummyType();

        $this->assertEquals('DummyType', $type->getType());

        $anotherType = new AnotherDummyType();

        $this->assertEquals('AnotherDummyType', $anotherType->getType());
    }

    /** @test */
    public function it_can_set_and_retrieve_a_property()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $this->assertEquals(['foo' => 'bar'], $type->getProperties());
    }

    /** @test */
    public function it_can_not_set_a_null_value()
    {
        $type = new DummyType();

        $type->setProperty('foo', null);

        $this->assertEquals([], $type->getProperties());
    }

    /** @test */
    public function it_can_conditionally_set_and_retrieve_a_property()
    {
        $type = new DummyType();

        $type->if(true, function (DummyType $type) {
            $type->setProperty('foo', 'bar');
        });

        $type->if(false, function (DummyType $type) {
            $type->setProperty('baz', 'qux');
        });

        $this->assertEquals(['foo' => 'bar'], $type->getProperties());
    }

    /** @test */
    public function it_can_add_multiple_properties_at_once()
    {
        $type = new DummyType();

        $type->addProperties([
            'foo' => 'bar',
            'baz' => 'qux',
        ]);

        $this->assertEquals(
            [
                'foo' => 'bar',
                'baz' => 'qux',
            ],
            $type->getProperties()
        );
    }

    /** @test */
    public function it_can_create_an_array_that_conforms_to_the_ld_json_spec_with_primitive_properties()
    {
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

        $this->assertEquals($expected, $type->toArray());
    }

    /** @test */
    public function it_can_create_an_array_that_conforms_to_the_ld_json_spec_with_datetimes()
    {
        $type = new DummyType();

        $type->setProperty('dateCreated', DateTime::createFromFormat(DateTime::ATOM, '2017-01-01T00:00:00+0000'));

        $expected = [
            '@context' => 'https://schema.org',
            '@type' => 'DummyType',
            'dateCreated' => '2017-01-01T00:00:00+00:00',
        ];

        $this->assertEquals($expected, $type->toArray());
    }

    /** @test */
    public function it_can_create_an_array_that_conforms_to_the_ld_json_spec_with_nested_types()
    {
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

        $this->assertEquals($expected, $type->toArray());
    }

    /** @test */
    public function it_can_create_an_array_that_conforms_to_the_ld_json_spec_with_an_array_of_types()
    {
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

        $this->assertEquals($expected, $type->toArray());
    }

    /** @test */
    public function it_can_create_an_ld_json_script_tag()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $expected = '<script type="application/ld+json">'.
            '{"@context":"https:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

        $this->assertEquals($expected, $type->toScript());
    }

    /** @test */
    public function it_can_set_a_property_via_a_magic_call_method()
    {
        $type = new DummyType();

        $type->foo('bar');

        $this->assertEquals(['foo' => 'bar'], $type->getProperties());
    }

    /** @test */
    public function it_can_use_array_access_to_set_a_property()
    {
        $type = new DummyType();

        $type['foo'] = 'bar';

        $this->assertEquals(['foo' => 'bar'], $type->getProperties());
    }

    /** @test */
    public function it_can_use_array_access_to_unset_a_property()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');
        $type->setProperty('bar', 'baz');
        unset($type['foo']);

        $this->assertEquals(['bar' => 'baz'], $type->getProperties());
    }

    /** @test */
    public function it_can_use_array_access_to_determine_if_a_property_exists()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $this->assertTrue(isset($type['foo']));
        $this->assertFalse(isset($type['bar']));
    }

    /** @test */
    public function it_can_use_array_access_to_get_a_property()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $this->assertEquals('bar', $type['foo']);
    }

    /** @test */
    public function it_can_be_json_serialized()
    {
        $child = new DummyType();
        $child->setProperty('bar', 'baz');

        $type = new DummyType();
        $type->setProperty('foo', 'bar');
        $type->setProperty('child', $child);
        $type->setProperty('array', [
            'child' => $child,
            'hello' => 'world',
        ]);
        $type->setProperty('string', new class() {
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

        $this->assertEquals($expected, $type->jsonSerialize(), 'Return value of `jsonSerialize` is wrong');
        $this->assertEquals(json_encode($expected), json_encode($type), 'JSON representation is wrong');
    }

    /** @test */
    public function it_will_throw_invalid_property_exception_with_object_property()
    {
        $this->expectException(InvalidProperty::class);

        $type = new DummyType();
        $type->setProperty('foo', new class() {
        });

        $type->jsonSerialize();
    }

    /** @test */
    public function it_can_be_casted_to_string()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $expected = '<script type="application/ld+json">'.
            '{"@context":"https:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

        $this->assertEquals($expected, (string) $type);
    }

    /** @test */
    public function it_replaces_identifier_with_at_id_property()
    {
        $type = new DummyType();

        $type->setProperty('identifier', 'object#1');

        $expected = [
            '@context' => 'https://schema.org',
            '@type' => 'DummyType',
            '@id' => 'object#1',
        ];

        $this->assertEquals($expected, $type->toArray());
    }

    /** @test */
    public function it_can_reference_type_by_identifier()
    {
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
            '@id' => '#2',
            'referenced' => [
                '@id' => '#1',
            ],
        ];

        $this->assertEquals($expected, $type2->toArray());
    }
}

class DummyType extends BaseType
{
}

class AnotherDummyType extends BaseType
{
}
