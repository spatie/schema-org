<?php

namespace Spatie\SchemaOrg\Tests;

use GrahamCampbell\Analyzer\AnalysisTrait;
use PHPUnit\Framework\TestCase;

class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    protected static function getPaths(): array
    {
        return [
            __DIR__.'/../src',
        ];
    }
}

uses(AnalysisTest::class);
