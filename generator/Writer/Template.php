<?php

namespace Spatie\SchemaOrg\Generator\Writer;

use Twig\Environment as TwigEnvironment;
use Twig\Loader\FilesystemLoader;
use Twig\TwigFilter;

class Template
{
    protected TwigEnvironment $twig;

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

    protected function createTwigEnvironment(): TwigEnvironment
    {
        $loader = new FilesystemLoader(__DIR__.'/../templates/twig');

        $twig = new TwigEnvironment($loader, [
            'cache' => false,
            'autoescape' => false,
        ]);

        $twig->addFilter(
            new TwigFilter('doc', [Filters::class, 'doc'], ['is_variadic' => true])
        );

        $twig->addFilter(
            new TwigFilter('param', [Filters::class, 'param'])
        );

        $twig->addFilter(
            new TwigFilter('lcfirst', [Filters::class, 'lcfirst'])
        );

        $twig->addFilter(
            new TwigFilter('fixLink', [Filters::class, 'fixLink'])
        );

        return $twig;
    }
}
