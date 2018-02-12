<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Symfony\Component\DomCrawler\Crawler;

abstract class Task
{
    /** @string */
    protected $definition;

    public function __construct(string $definition)
    {
        $this->definition = $definition;
    }

    public static function fromCrawler(Crawler $crawler): self
    {
        $node = $crawler->getNode(0);
        $html = $node->ownerDocument->saveHTML($node);

        return new static($html);
    }

    protected function getText(Crawler $node, string $selector = null): string
    {
        if ($selector) {
            $node = $node->filter($selector)->first();
        }

        if ($node->count() === 0) {
            return '';
        }

        return trim($node->text());
    }

    protected function getAttribute(Crawler $node, string $attribute): string
    {
        if ($node->count() === 0) {
            return '';
        }

        return $node->filter("[{$attribute}]")->attr($attribute) ?? '';
    }
}
