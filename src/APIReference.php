<?php

namespace Spatie\SchemaOrg;

/**
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see http://schema.org/APIReference
 */
class APIReference extends TechArticle
{
    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     * @param string $assembly
     *
     * @return static
     *
     * @see http://schema.org/assembly
     */
    public function assembly($assembly)
    {
        return $this->setProperty('assembly', $assembly);
    }

    /**
     * Library file name e.g., mscorlib.dll, system.web.dll.
     *
     * @param string $executableLibraryName
     *
     * @return static
     *
     * @see http://schema.org/executableLibraryName
     */
    public function executableLibraryName($executableLibraryName)
    {
        return $this->setProperty('executableLibraryName', $executableLibraryName);
    }

    /**
     * Associated product/technology version. e.g., .NET Framework 4.5.
     *
     * @param string $assemblyVersion
     *
     * @return static
     *
     * @see http://schema.org/assemblyVersion
     */
    public function assemblyVersion($assemblyVersion)
    {
        return $this->setProperty('assemblyVersion', $assemblyVersion);
    }

    /**
     * Indicates whether API is managed or unmanaged.
     *
     * @param string $programmingModel
     *
     * @return static
     *
     * @see http://schema.org/programmingModel
     */
    public function programmingModel($programmingModel)
    {
        return $this->setProperty('programmingModel', $programmingModel);
    }

    /**
     * Type of app development: phone, Metro style, desktop, XBox, etc.
     *
     * @param string $targetPlatform
     *
     * @return static
     *
     * @see http://schema.org/targetPlatform
     */
    public function targetPlatform($targetPlatform)
    {
        return $this->setProperty('targetPlatform', $targetPlatform);
    }

}
