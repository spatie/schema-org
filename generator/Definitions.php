<?php

namespace Spatie\SchemaOrg\Generator;

use RuntimeError;
use Spatie\SchemaOrg\Generator\Parser\JsonLdParser;
use Tightenco\Collect\Support\Collection;

class Definitions
{
    /** @var array */
    protected $sources;

    /** @var string */
    protected $tempDir = __DIR__.'/temp';

    public function __construct(array $sources)
    {
        $this->sources = $sources;
    }

    public function preload()
    {
        foreach ($this->sources as $sourceId => $sourcePath) {
            $this->loadSource($sourceId, false);
        }
    }

    public function query(string $selector): Collection
    {
        return (new JsonLdParser($this->loadSource('current')))->filter($selector);
    }

    protected function loadSource(string $sourceId, bool $fromCache = true): string
    {
        if (! isset($this->sources[$sourceId])) {
            throw new RuntimeError("Source `{$sourceId}` doesn't exist");
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
