<?php

namespace Spatie\SchemaOrg\Generator\Parser\Tasks;

use Symfony\Component\DomCrawler\Crawler;

abstract class Task
{
    /** @var Symfony\Component\DomCrawler\Crawler */
    protected $node;

    abstract public function __invoke();

    public function __construct(Crawler $node)
    {
        $this->node = $node;
    }

    protected function getText(string $selector = null) : string
    {
        $node = $selector
            ? $this->node->filter($selector)->first()
            : $this->node;

        if ($node->count() === 0) {
            return '';
        }

        return trim($node->text());
    }

    protected function getAttribute(string $attribute) : string
    {
        if ($this->node->count() === 0) {
            return '';
        }

        return $this->node->attr($attribute);
    }
}
