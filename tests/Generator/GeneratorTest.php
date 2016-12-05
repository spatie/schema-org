<?php

namespace Spatie\SchemaOrg\Test\Generator;

use PHPUnit_Framework_TestCase;
use Spatie\SchemaOrg\Generator\PackageGenerator;

class GeneratorTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    function it_can_generate_the_package()
    {
        PackageGenerator::from(
            file_get_contents(__DIR__.'/data/schema-excerpt.rdfa')
        );
    }
}
