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
            ->addOption('extensions', 'e', InputOption::VALUE_REQUIRED, 'Comma-separated list of Schema.org extensions to include ()');
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

        if ($input->getOption('extensions')) {
            $extensions = explode(',', $input->getOption('extensions'));
            foreach ($extensions as $extension) {
                switch ($extension) {
                    case 'auto':
                        $sources['auto'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/auto/auto.rdfa';
                        break;
                    case 'bib':
                        $sources['bib'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/bib/bsdo-1.0.rdfa';
                        break;
                    case 'health-lifesci':
                        $sources['med-health-core'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/health-lifesci/med-health-core.rdfa';
                        $sources['physical-activity-and-exercise'] = 'https://raw.githubusercontent.com/schemaorg/schemaorg/master/data/ext/health-lifesci/physical-activity-and-exercise.rdfa';
                        break;
                }
            }
        }

        $definitions = new Definitions($sources);

        if (! $input->getOption('local')) {
            $definitions->preload();
        }

        $generator->generate($definitions);

        $output->writeln('Done!');

        return 0;
    }
}
