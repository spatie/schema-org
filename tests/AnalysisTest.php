<?php

namespace Tests\Analysis;

use GrahamCampbell\Analyzer\AnalysisTrait;
use PHPUnit\Framework\TestCase;

class AnalysisTest extends TestCase
{
    use AnalysisTrait;

    public function getPaths()
    {
        return [
            __DIR__.'/../src',
        ];
    }
}
