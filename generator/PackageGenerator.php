<?php

namespace Spatie\SchemaOrg\Generator;

use Spatie\SchemaOrg\Generator\Parser\RdfaParser;
use Spatie\SchemaOrg\Generator\Writer\Filesystem;

class PackageGenerator
{
    public function generate(string $rdfa)
    {
        $types = (new RdfaParser())->parse($rdfa);

        $filesystem = new Filesystem(__DIR__.'/..');

        $filesystem->clear();

        $filesystem->cloneStaticFiles();

        $types->each(function (Type $type) use ($filesystem) {
            $filesystem->createType($type);
        });

        $filesystem->createFactory($types);
    }
}
