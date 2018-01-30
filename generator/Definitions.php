<?php

namespace Spatie\SchemaOrg\Generator;

use RuntimeError;
use Symfony\Component\DomCrawler\Crawler;

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

    public function query(string $selector): Crawler
    {
        return (new Crawler($this->loadSource('core')))->filter($selector);
    }

    protected function loadSource(string $sourceId, bool $fromCache = true): string
    {
        if (! isset($this->sources[$sourceId])) {
            throw new RuntimeError("Source `{$sourceId}` doesn't exist");
        }

        $cachePath = $this->tempDir.'/'.$sourceId.'.rdfa';

        if ($fromCache && file_exists($cachePath)) {
            return file_get_contents($cachePath);
        }

        $rdfa = file_get_contents($this->sources[$sourceId]);

        file_put_contents($cachePath, $rdfa);

        return $rdfa;
    }
}
