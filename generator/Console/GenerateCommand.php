<?php

namespace Spatie\SchemaOrg\Generator\Console;

use Spatie\SchemaOrg\Generator\PackageGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    const SOURCE = 'https://raw.githubusercontent.com/schemaorg/schemaorg/sdo-callisto/data/schema.rdfa';

    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the schema.org docs')
            ->addArgument('source', InputArgument::OPTIONAL, 'Path to the RDFa source file', static::SOURCE);
    }

    /**
     * @param \Symfony\Component\Console\Input\InputInterface $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Generating package code...');

        $generator = new PackageGenerator();

        $generator->generate(
            file_get_contents($input->getArgument('source'))
        );

        $output->writeln('Fresh package generated!');

        return 0;
    }
}
