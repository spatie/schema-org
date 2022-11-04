<?php

namespace Spatie\SchemaOrg\Generator\Console;

use Spatie\SchemaOrg\Generator\Definitions;
use Spatie\SchemaOrg\Generator\PackageGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the schema.org docs')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Use a cached version of the source');
    }

    /**
     * @param  \Symfony\Component\Console\Input\InputInterface  $input
     * @param  \Symfony\Component\Console\Output\OutputInterface  $output
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Generating package code...');

        $generator = new PackageGenerator();

        $definitions = new Definitions([
            'core' => 'https://raw.githubusercontent.com/schemaorg/schemaorg/main/data/releases/15.0/schemaorg-all-https.jsonld',
        ]);

        if (! $input->getOption('local')) {
            $definitions->preload();
        }

        $generator->generate($definitions);

        $output->writeln('Done!');

        return 0;
    }
}
