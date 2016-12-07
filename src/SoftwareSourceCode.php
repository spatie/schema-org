<?php

namespace Spatie\SchemaOrg;

/**
 * Computer programming source code. Example: Full (compile ready) solutions,
 * code snippet samples, scripts, templates.
 *
 * @see http://schema.org/SoftwareSourceCode
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex).
     *
     * @param string $codeRepository
     *
     * @return static
     *
     * @see http://schema.org/codeRepository
     */
    public function codeRepository($codeRepository)
    {
        return $this->setProperty('codeRepository', $codeRepository);
    }

    /**
     * The computer programming language.
     *
     * @param \Spatie\SchemaOrg\ComputerLanguage|string $programmingLanguage
     *
     * @return static
     *
     * @see http://schema.org/programmingLanguage
     */
    public function programmingLanguage($programmingLanguage)
    {
        return $this->setProperty('programmingLanguage', $programmingLanguage);
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     *
     * @param string $runtime
     *
     * @return static
     *
     * @see http://schema.org/runtime
     */
    public function runtime($runtime)
    {
        return $this->setProperty('runtime', $runtime);
    }

    /**
     * Runtime platform or script interpreter dependencies (Example - Java v1,
     * Python2.3, .Net Framework 3.0).
     *
     * @param string $runtimePlatform
     *
     * @return static
     *
     * @see http://schema.org/runtimePlatform
     */
    public function runtimePlatform($runtimePlatform)
    {
        return $this->setProperty('runtimePlatform', $runtimePlatform);
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @param string $sampleType
     *
     * @return static
     *
     * @see http://schema.org/sampleType
     */
    public function sampleType($sampleType)
    {
        return $this->setProperty('sampleType', $sampleType);
    }

    /**
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @param string $codeSampleType
     *
     * @return static
     *
     * @see http://schema.org/codeSampleType
     */
    public function codeSampleType($codeSampleType)
    {
        return $this->setProperty('codeSampleType', $codeSampleType);
    }

    /**
     * Target Operating System / Product to which the code applies.  If applies
     * to several versions, just the product name can be used.
     *
     * @param \Spatie\SchemaOrg\SoftwareApplication $targetProduct
     *
     * @return static
     *
     * @see http://schema.org/targetProduct
     */
    public function targetProduct($targetProduct)
    {
        return $this->setProperty('targetProduct', $targetProduct);
    }

}
