<?php

namespace Spatie\SchemaOrg\Tests;

use GrahamCampbell\Analyzer\AnalysisTrait;
use PHPUnit\Framework\TestCase;

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
