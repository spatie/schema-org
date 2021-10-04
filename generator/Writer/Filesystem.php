<?php

namespace Spatie\SchemaOrg\Generator\Writer;

use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\Local\LocalFilesystemAdapter;
use Spatie\SchemaOrg\Generator\Type;
use Spatie\SchemaOrg\Generator\TypeCollection;

class Filesystem
{
    /** @var \League\Flysystem\Filesystem */
    protected $flysystem;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $contractTemplate;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $typeTemplate;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $builderClassTemplate;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $graphClassTemplate;

    /** @var \Spatie\SchemaOrg\Generator\Writer\Template */
    protected $multiTypedEntityClassTemplate;

    public function __construct(string $root)
    {
        $adapter = new LocalFilesystemAdapter($root);
        $this->flysystem = new Flysystem($adapter);

        $this->contractTemplate = new Template('Contract.php.twig');
        $this->typeTemplate = new Template('Type.php.twig');
        $this->builderClassTemplate = new Template('Schema.php.twig');
        $this->graphClassTemplate = new Template('Graph.php.twig');
        $this->multiTypedEntityClassTemplate = new Template('MultiTypedEntity.php.twig');
    }

    public function clear()
    {
        $this->flysystem->deleteDirectory('src');
        $this->flysystem->createDirectory('src');
    }

    public function cloneStaticFiles()
    {
        $files = $this->flysystem->listContents('generator/templates/static', true);

        foreach ($files as $file) {
            if ($file['type'] !== 'file') {
                continue;
            }

            $this->flysystem->write(
                str_replace('generator/templates/static', 'src', $file['path']),
                $this->flysystem->read($file['path'])
            );
        }
    }

    public function createType(Type $type)
    {
        $this->flysystem->write(
            "src/Contracts/{$type->className}Contract.php",
            $this->contractTemplate->render(['type' => $type])
        );

        $this->flysystem->write(
            "src/{$type->className}.php",
            $this->typeTemplate->render(['type' => $type])
        );
    }

    public function createBuilderClass(TypeCollection $types)
    {
        $this->flysystem->write(
            'src/Schema.php',
            $this->builderClassTemplate->render(['types' => $types->toArray()])
        );

        $this->flysystem->write(
            'src/Graph.php',
            $this->graphClassTemplate->render(['types' => $types->toArray()])
        );

        $this->flysystem->write(
            'src/MultiTypedEntity.php',
            $this->multiTypedEntityClassTemplate->render(['types' => $types->toArray()])
        );
    }
}
