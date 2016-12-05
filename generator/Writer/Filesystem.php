<?php

namespace Spatie\SchemaOrg\Generator\Writer;

use League\Flysystem\Adapter\Local;
use League\Flysystem\Filesystem as Flysystem;
use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\TypeCollection;

class Filesystem
{
    /** @var \League\Flysystem\Filesystem */
    protected $flysystem;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $typeTemplate;

    public function __construct(string $root)
    {
        $adapter = new Local($root);
        $this->flysystem = new Flysystem($adapter);

        $this->typeTemplate = new Template('Type.php.twig');
        $this->factoryTemplate = new Template('Schema.php.twig');
    }

    public function clear()
    {
        $this->flysystem->deleteDir('src');
        $this->flysystem->createDir('src');
    }

    public function cloneStaticFiles()
    {
        $files = $this->flysystem->listContents('generator/templates/static', true);

        foreach ($files as $file) {
            if ($file['type'] !== 'file') {
                continue;
            }

            $this->flysystem->put(
                str_replace('generator/templates/static', 'src', $file['path']),
                $this->flysystem->read($file['path'])
            );
        }
    }

    public function createType(Type $type)
    {
        $this->flysystem->put(
            "src/{$type->name}.php",
            $this->typeTemplate->render(['type' => $type])
        );
    }

    public function createFactory(TypeCollection $types)
    {
        $this->flysystem->put(
            "src/Schema.php",
            $this->factoryTemplate->render(['types' => $types->toArray()])
        );
    }
}
