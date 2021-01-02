<?php

namespace Spatie\SchemaOrg\Generator;

use Illuminate\Support\Collection;
use OutOfBoundsException;
use Spatie\SchemaOrg\Generator\Parser\JsonLdParser;

class Definitions
{
    protected array $sources;

    protected string $tempDir = __DIR__.'/temp';

    public function __construct(array $sources)
    {
        $this->sources = $sources;
    }

    public function preload(): void
    {
        foreach ($this->sources as $sourceId => $sourcePath) {
            $this->loadSource($sourceId, false);
        }
    }

    public function query(string $selector): Collection
    {
        return (new JsonLdParser($this->loadSource('core')))->filter($selector);
    }

    protected function loadSource(string $sourceId, bool $fromCache = true): string
    {
        if (! isset($this->sources[$sourceId])) {
            throw new OutOfBoundsException("Source `{$sourceId}` doesn't exist");
        }

        $cachePath = $this->tempDir.'/'.$sourceId.'.jsonld';

        if ($fromCache && file_exists($cachePath)) {
            return file_get_contents($cachePath);
        }

        $jsonLd = file_get_contents($this->sources[$sourceId]);

        file_put_contents($cachePath, $jsonLd);

        return $jsonLd;
    }
}
