<?php

namespace Spatie\SchemaOrg\Tests;

use Spatie\SchemaOrg\Type;
use Spatie\SchemaOrg\Schema;
use PHPUnit\Framework\TestCase;
use Spatie\SchemaOrg\LocalBusiness;

class GeneratedTypeSmokeTest extends TestCase
{
    /** @test */
    public function it_is_initializable()
    {
        $this->assertInstanceOf(Type::class, new LocalBusiness());
    }

    /** @test */
    public function it_can_be_created_from_a_factory_method()
    {
        $this->assertInstanceOf(LocalBusiness::class, Schema::localBusiness());
    }

    /** @test */
    public function it_can_be_rendered_with_properties()
    {
        $localBusiness = Schema::localBusiness()
            ->name('Spatie')
            ->email('info@spatie.be');

        $expected = '<script type="application/ld+json">'.
                '{"@context":"https:\/\/schema.org","@type":"LocalBusiness","name":"Spatie","email":"info@spatie.be"}'.
            '</script>';

        $this->assertEquals($expected, $localBusiness->toScript());
    }

    /** @test */
    public function it_can_be_rendered_with_child_properties()
    {
        $localBusiness = Schema::localBusiness()
            ->name('Spatie')
            ->contactPoint(Schema::contactPoint()->areaServed('Worldwide'));

        $expected = '<script type="application/ld+json">'.
                '{"@context":"https:\/\/schema.org","@type":"LocalBusiness","name":"Spatie",'.
                '"contactPoint":{"@type":"ContactPoint","areaServed":"Worldwide"}}'.
            '</script>';

        $this->assertEquals($expected, $localBusiness->toScript());
    }
}
