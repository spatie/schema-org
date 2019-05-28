<?php

namespace Spatie\SchemaOrg\Generator\Console;

use Spatie\SchemaOrg\Generator\Definitions;
use Symfony\Component\Console\Command\Command;
use Spatie\SchemaOrg\Generator\PackageGenerator;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('generate')
            ->setDescription('Generate the package code from the schema.org docs')
            ->addOption('local', 'l', InputOption::VALUE_NONE, 'Use a cached version of the source')
            ->addOption('rdfa', null, InputOption::VALUE_REQUIRED | InputOption::VALUE_IS_ARRAY, 'Link to RDFA file which extends schema.org to include')
            ->addOption('with-auto', null, InputOption::VALUE_NONE, 'Include the https://auto.schema.org extension')
            ->addOption('with-bib', null, InputOption::VALUE_NONE, 'Include the https://bib.schema.org extension')
            ->addOption('with-health-lifesci', null, InputOption::VALUE_NONE, 'Include the https://health-lifesci.schema.org extension');
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

        $sources = [
            'core' => 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/schema.rdfa',
        ];

        if ($input->getOption('with-auto')) {
            $sources['auto'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/auto/auto.rdfa';
        }

        if ($input->getOption('with-bib')) {
            $sources['bsdo'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/bib/bsdo-1.0.rdfa';
            $sources['comics'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/bib/comics.rdfa';
        }

        if ($input->getOption('with-health-lifesci')) {
            $sources['med-health-core'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/health-lifesci/med-health-core.rdfa';
            $sources['physical-activity-and-exercise'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/health-lifesci/physical-activity-and-exercise.rdfa';
        }

        foreach ($input->getOption('rdfa') as $rdfa) {
            $sources[pathinfo($rdfa, PATHINFO_FILENAME)] = $rdfa;
        }

        $sources = array_unique($sources);

        $definitions = new Definitions($sources);

        if (! $input->getOption('local')) {
            $definitions->preload();
        }

        $generator->generate($definitions);

        $output->writeln('Done!');

        return 0;
    }
}
