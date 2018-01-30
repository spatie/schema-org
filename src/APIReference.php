<?php

namespace Spatie\SchemaOrg;

/**
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see 
 */
class APIReference extends TechArticle
{
    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     * @param string|string[] $executableLibraryName
     *
     * @return static
     *
     * @see 
     */
    public function executableLibraryName($executableLibraryName)
    {
        return $this->setProperty('executableLibraryName', $executableLibraryName);
    }

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     * @param string|string[] $assembly
     *
     * @return static
     *
     * @see 
     */
    public function assembly($assembly)
    {
        return $this->setProperty('assembly', $assembly);
    }

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5.
     *
     * @param string|string[] $assemblyVersion
     *
     * @return static
     *
     * @see 
     */
    public function assemblyVersion($assemblyVersion)
    {
        return $this->setProperty('assemblyVersion', $assemblyVersion);
    }

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @param string|string[] $programmingModel
     *
     * @return static
     *
     * @see 
     */
    public function programmingModel($programmingModel)
    {
        return $this->setProperty('programmingModel', $programmingModel);
    }

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @param string|string[] $targetPlatform
     *
     * @return static
     *
     * @see 
     */
    public function targetPlatform($targetPlatform)
    {
        return $this->setProperty('targetPlatform', $targetPlatform);
    }

}
