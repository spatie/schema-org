<?php

namespace Spatie\Skeleton\Test;

use PHPUnit_Framework_TestCase;
use Spatie\SchemaOrg\BaseType;

class BaseTypeTest extends PHPUnit_Framework_TestCase
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
    public function it_can_create_an_ld_json_script_tag()
    {
        $type = new DummyType();

        $type->setProperty('foo', 'bar');

        $expected = '<script type="application/ld+json">'.
            '{"@context":"http:\/\/schema.org","@type":"DummyType","foo":"bar"}'.
        '</script>';

        $this->assertEquals($expected, $type->toScript());
    }
}

class DummyType extends BaseType
{
}

class AnotherDummyType extends BaseType
{
}
