<?php

namespace Spatie\SchemaOrg\Generator;

use Spatie\SchemaOrg\Generator\Writer\Filesystem;
use Spatie\SchemaOrg\Generator\Parser\DefinitionParser;

class PackageGenerator
{
    public function generate(Definitions $definitions)
    {
        $types = (new DefinitionParser())->parse($definitions);

        $filesystem = new Filesystem(__DIR__.'/..');

        $filesystem->clear();

        $filesystem->cloneStaticFiles();

        $types->each(function (Type $type) use ($filesystem) {
            $filesystem->createType($type);
        });

        $filesystem->createFactory($types);
    }
}
