<?php

namespace Spatie\SchemaOrg\Generator;

use Spatie\SchemaOrg\Generator\Parser\RdfaParser;
use Spatie\SchemaOrg\Generator\Writer\Filesystem;

class PackageGenerator
{
    public function generate(string $rdfa)
    {
        $types = (new RdfaParser($rdfa))->parse();

        $filesystem = new Filesystem(__DIR__.'/..');

        $filesystem->clear();

        $filesystem->cloneStaticFiles();

        $types->each(function (Type $type) use ($filesystem) {
            $filesystem->putType($type);
        });
    }
}
