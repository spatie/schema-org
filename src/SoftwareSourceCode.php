<?php

namespace Spatie\SchemaOrg;

/**
 * Computer programming source code. Example: Full (compile ready) solutions,
 * code snippet samples, scripts, templates.
 *
 * @see http://schema.org/SoftwareSourceCode
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class SoftwareSourceCode extends BaseType
{
    /**
     * Link to the repository where the un-compiled, human readable code and
     * related code is located (SVN, github, CodePlex).
     *
     * @param string|string[] $codeRepository
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
     * What type of code sample: full (compile ready) solution, code snippet,
     * inline code, scripts, template.
     *
     * @param string|string[] $codeSampleType
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
     * The computer programming language.
     *
     * @param ComputerLanguage|ComputerLanguage[]|string|string[] $programmingLanguage
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
     * @param string|string[] $runtime
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
     * @param string|string[] $runtimePlatform
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
     * @param string|string[] $sampleType
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
     * Target Operating System / Product to which the code applies.  If applies
     * to several versions, just the product name can be used.
     *
     * @param SoftwareApplication|SoftwareApplication[] $targetProduct
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
