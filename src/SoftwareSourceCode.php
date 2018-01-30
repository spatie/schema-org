<?php

namespace Spatie\SchemaOrg;

/**
 * Computer programming source code. Example: Full (compile ready) solutions,
 * code snippet samples, scripts, templates.
 *
 * @see 
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex).
     *
     * @param string|string[] $codeRepository
     *
     * @return static
     *
     * @see 
     */
    public function codeRepository($codeRepository)
    {
        return $this->setProperty('codeRepository', $codeRepository);
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @param string|string[] $codeSampleType
     *
     * @return static
     *
     * @see 
     */
    public function codeSampleType($codeSampleType)
    {
        return $this->setProperty('codeSampleType', $codeSampleType);
    }

    /**
     * The computer programming language.
     *
     * @param ComputerLanguage|ComputerLanguage[]|string|string[] $programmingLanguage
     *
     * @return static
     *
     * @see 
     */
    public function programmingLanguage($programmingLanguage)
    {
        return $this->setProperty('programmingLanguage', $programmingLanguage);
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     *
     * @param string|string[] $runtime
     *
     * @return static
     *
     * @see 
     */
    public function runtime($runtime)
    {
        return $this->setProperty('runtime', $runtime);
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     *
     * @param string|string[] $runtimePlatform
     *
     * @return static
     *
     * @see 
     */
    public function runtimePlatform($runtimePlatform)
    {
        return $this->setProperty('runtimePlatform', $runtimePlatform);
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @param string|string[] $sampleType
     *
     * @return static
     *
     * @see 
     */
    public function sampleType($sampleType)
    {
        return $this->setProperty('sampleType', $sampleType);
    }

    /**
     * Target Operating System / Product to which the code applies.  If applies
     * to several versions, just the product name can be used.
     *
     * @param SoftwareApplication|SoftwareApplication[] $targetProduct
     *
     * @return static
     *
     * @see 
     */
    public function targetProduct($targetProduct)
    {
        return $this->setProperty('targetProduct', $targetProduct);
    }

}
