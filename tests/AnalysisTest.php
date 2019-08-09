<?php

namespace Spatie\SchemaOrg\Tests;

use PHPUnit\Framework\TestCase;
use GrahamCampbell\Analyzer\AnalysisTrait;

class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    protected function getPaths()
    {
        return [
            __DIR__.'/../src',
        ];
    }
}
