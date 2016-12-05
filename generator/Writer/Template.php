<?php

namespace Spatie\SchemaOrg\Generator\Writer;

use Twig_Environment;
use Twig_Loader_Filesystem;
use Twig_SimpleFilter;

class Template
{
    /** @var \Twig_Environment */
    protected $twig;

    /** @var string */
    protected $template;

    public function __construct(string $template)
    {
        $this->template = $template;
        $this->twig = $this->createTwigEnvironment();
    }

    public function render(array $context): string
    {
        return $this->twig
            ->load($this->template)
            ->render($context);
    }

    protected function createTwigEnvironment(): Twig_Environment
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../templates/twig');

        $twig = new Twig_Environment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);

        $twig->addFilter(
            new Twig_SimpleFilter('doc', [Filters::class, 'doc'], ['is_variadic' => true])
        );

        return $twig;
    }
}
