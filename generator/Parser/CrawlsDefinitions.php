<?php

namespace Spatie\SchemaOrg\Generator\Parser;

use Symfony\Component\DomCrawler\Crawler;

trait CrawlsDefinitions
{
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

        return $node->attr($attribute) ?? '';
    }
}
