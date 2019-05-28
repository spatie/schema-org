<?php

namespace Spatie\SchemaOrg\Generator\Console;

use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    public function __construct()
    {
        parent::__construct('Spatie\SchemaOrg package generator', '1.0.0');

        $this->add(new GenerateCommand());
        $this->setDefaultCommand('generate', true);
    }

    public function getLongVersion()
    {
        return parent::getLongVersion().' by <comment>Spatie</comment>';
    }
}
