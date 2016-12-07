<?php

namespace Spatie\SchemaOrg;

/**
 * A software application.
 *
 * @see http://schema.org/SoftwareApplication
 */
class SoftwareApplication extends CreativeWork
{
    /**
     * Type of software application, e.g. 'Game, Multimedia'.
     *
     * @param string $applicationCategory
     *
     * @return static
     *
     * @see http://schema.org/applicationCategory
     */
    public function applicationCategory($applicationCategory)
    {
        return $this->setProperty('applicationCategory', $applicationCategory);
    }

    /**
     * Subcategory of the application, e.g. 'Arcade Game'.
     *
     * @param string $applicationSubCategory
     *
     * @return static
     *
     * @see http://schema.org/applicationSubCategory
     */
    public function applicationSubCategory($applicationSubCategory)
    {
        return $this->setProperty('applicationSubCategory', $applicationSubCategory);
    }

    /**
     * The name of the application suite to which the application belongs (e.g.
     * Excel belongs to Office).
     *
     * @param string $applicationSuite
     *
     * @return static
     *
     * @see http://schema.org/applicationSuite
     */
    public function applicationSuite($applicationSuite)
    {
        return $this->setProperty('applicationSuite', $applicationSuite);
    }

    /**
     * Countries for which the application is not supported. You can also
     * provide the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param string $countriesNotSupported
     *
     * @return static
     *
     * @see http://schema.org/countriesNotSupported
     */
    public function countriesNotSupported($countriesNotSupported)
    {
        return $this->setProperty('countriesNotSupported', $countriesNotSupported);
    }

    /**
     * Countries for which the application is supported. You can also provide
     * the two-letter ISO 3166-1 alpha-2 country code.
     *
     * @param string $countriesSupported
     *
     * @return static
     *
     * @see http://schema.org/countriesSupported
     */
    public function countriesSupported($countriesSupported)
    {
        return $this->setProperty('countriesSupported', $countriesSupported);
    }

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @param string $device
     *
     * @return static
     *
     * @see http://schema.org/device
     */
    public function device($device)
    {
        return $this->setProperty('device', $device);
    }

    /**
     * Device required to run the application. Used in cases where a specific
     * make/model is required to run the application.
     *
     * @param string $availableOnDevice
     *
     * @return static
     *
     * @see http://schema.org/availableOnDevice
     */
    public function availableOnDevice($availableOnDevice)
    {
        return $this->setProperty('availableOnDevice', $availableOnDevice);
    }

    /**
     * If the file can be downloaded, URL to download the binary.
     *
     * @param string $downloadUrl
     *
     * @return static
     *
     * @see http://schema.org/downloadUrl
     */
    public function downloadUrl($downloadUrl)
    {
        return $this->setProperty('downloadUrl', $downloadUrl);
    }

    /**
     * Features or modules provided by this application (and possibly required
     * by other applications).
     *
     * @param string $featureList
     *
     * @return static
     *
     * @see http://schema.org/featureList
     */
    public function featureList($featureList)
    {
        return $this->setProperty('featureList', $featureList);
    }

    /**
     * Size of the application / package (e.g. 18MB). In the absence of a unit
     * (MB, KB etc.), KB will be assumed.
     *
     * @param string $fileSize
     *
     * @return static
     *
     * @see http://schema.org/fileSize
     */
    public function fileSize($fileSize)
    {
        return $this->setProperty('fileSize', $fileSize);
    }

    /**
     * URL at which the app may be installed, if different from the URL of the
     * item.
     *
     * @param string $installUrl
     *
     * @return static
     *
     * @see http://schema.org/installUrl
     */
    public function installUrl($installUrl)
    {
        return $this->setProperty('installUrl', $installUrl);
    }

    /**
     * Minimum memory requirements.
     *
     * @param string $memoryRequirements
     *
     * @return static
     *
     * @see http://schema.org/memoryRequirements
     */
    public function memoryRequirements($memoryRequirements)
    {
        return $this->setProperty('memoryRequirements', $memoryRequirements);
    }

    /**
     * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
     *
     * @param string $operatingSystem
     *
     * @return static
     *
     * @see http://schema.org/operatingSystem
     */
    public function operatingSystem($operatingSystem)
    {
        return $this->setProperty('operatingSystem', $operatingSystem);
    }

    /**
     * Permission(s) required to run the app (for example, a mobile app may
     * require full internet access or may run only on wifi).
     *
     * @param string $permissions
     *
     * @return static
     *
     * @see http://schema.org/permissions
     */
    public function permissions($permissions)
    {
        return $this->setProperty('permissions', $permissions);
    }

    /**
     * Processor architecture required to run the application (e.g. IA64).
     *
     * @param string $processorRequirements
     *
     * @return static
     *
     * @see http://schema.org/processorRequirements
     */
    public function processorRequirements($processorRequirements)
    {
        return $this->setProperty('processorRequirements', $processorRequirements);
    }

    /**
     * Description of what changed in this version.
     *
     * @param string $releaseNotes
     *
     * @return static
     *
     * @see http://schema.org/releaseNotes
     */
    public function releaseNotes($releaseNotes)
    {
        return $this->setProperty('releaseNotes', $releaseNotes);
    }

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the
     * application distribution package, but required to run the application
     * (Examples: DirectX, Java or .NET runtime).
     *
     * @param string $requirements
     *
     * @return static
     *
     * @see http://schema.org/requirements
     */
    public function requirements($requirements)
    {
        return $this->setProperty('requirements', $requirements);
    }

    /**
     * Component dependency requirements for application. This includes runtime
     * environments and shared libraries that are not included in the
     * application distribution package, but required to run the application
     * (Examples: DirectX, Java or .NET runtime).
     *
     * @param string $softwareRequirements
     *
     * @return static
     *
     * @see http://schema.org/softwareRequirements
     */
    public function softwareRequirements($softwareRequirements)
    {
        return $this->setProperty('softwareRequirements', $softwareRequirements);
    }

    /**
     * A link to a screenshot image of the app.
     *
     * @param \Spatie\SchemaOrg\ImageObject|string $screenshot
     *
     * @return static
     *
     * @see http://schema.org/screenshot
     */
    public function screenshot($screenshot)
    {
        return $this->setProperty('screenshot', $screenshot);
    }

    /**
     * Version of the software instance.
     *
     * @param string $softwareVersion
     *
     * @return static
     *
     * @see http://schema.org/softwareVersion
     */
    public function softwareVersion($softwareVersion)
    {
        return $this->setProperty('softwareVersion', $softwareVersion);
    }

    /**
     * Storage requirements (free space required).
     *
     * @param string $storageRequirements
     *
     * @return static
     *
     * @see http://schema.org/storageRequirements
     */
    public function storageRequirements($storageRequirements)
    {
        return $this->setProperty('storageRequirements', $storageRequirements);
    }

    /**
     * Supporting data for a SoftwareApplication.
     *
     * @param \Spatie\SchemaOrg\DataFeed $supportingData
     *
     * @return static
     *
     * @see http://schema.org/supportingData
     */
    public function supportingData($supportingData)
    {
        return $this->setProperty('supportingData', $supportingData);
    }

    /**
     * Additional content for a software application.
     *
     * @param \Spatie\SchemaOrg\SoftwareApplication $softwareAddOn
     *
     * @return static
     *
     * @see http://schema.org/softwareAddOn
     */
    public function softwareAddOn($softwareAddOn)
    {
        return $this->setProperty('softwareAddOn', $softwareAddOn);
    }

    /**
     * Software application help.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $softwareHelp
     *
     * @return static
     *
     * @see http://schema.org/softwareHelp
     */
    public function softwareHelp($softwareHelp)
    {
        return $this->setProperty('softwareHelp', $softwareHelp);
    }

}
