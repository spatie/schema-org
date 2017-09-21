<?php

namespace Spatie\Skeleton\Test;

use DateTime;
use Spatie\SchemaOrg\BaseType;
use PHPUnit\Framework\TestCase;

class BaseTypeTest extends TestCase
{
    /** @test */
    public function it_has_a_default_context()
    {
        $type = new DummyType();

        $this->assertEquals('http://schema.org', $type->getContext());
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
            '@context' => 'http://schema.org',
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

        $type->setProperty('dateCreated', DateTime::createFromFormat('Y-m-d H:i:s', '2017-01-01 00:00:00'));

        $expected = [
            '@context' => 'http://schema.org',
            '@type' => 'DummyType',
            'dateCreated' => '2017-01-01T00:00:00+0000',
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
            '@context' => 'http://schema.org',
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
            '@context' => 'http://schema.org',
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
            '{"@context":"http:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
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
}

class DummyType extends BaseType
{
}

class AnotherDummyType extends BaseType
{
}
