<?php

namespace Spatie\SchemaOrg;

/**
 * An entry point, within some Web-based protocol.
 *
 * @see http://schema.org/EntryPoint
 */
class EntryPoint extends Intangible
{
    /**
     * The high level platform(s) where the Action can be performed for the
     * given URL. To specify a specific application or operating system
     * instance, use actionApplication.
     *
     * @param \Spatie\SchemaOrg\ $actionPlatform
     *
     * @return static
     *
     * @see http://schema.org/actionPlatform
     */
    public function actionPlatform($actionPlatform)
    {
        return $this->setProperty('actionPlatform', $actionPlatform);
    }

    /**
     * An HTTP method that specifies the appropriate HTTP method for a request
     * to an HTTP EntryPoint. Values are capitalized strings as used in HTTP.
     *
     * @param string $httpMethod
     *
     * @return static
     *
     * @see http://schema.org/httpMethod
     */
    public function httpMethod($httpMethod)
    {
        return $this->setProperty('httpMethod', $httpMethod);
    }

    /**
     * The supported encoding type(s) for an EntryPoint request.
     *
     * @param string $encodingType
     *
     * @return static
     *
     * @see http://schema.org/encodingType
     */
    public function encodingType($encodingType)
    {
        return $this->setProperty('encodingType', $encodingType);
    }

    /**
     * The supported content type(s) for an EntryPoint response.
     *
     * @param string $contentType
     *
     * @return static
     *
     * @see http://schema.org/contentType
     */
    public function contentType($contentType)
    {
        return $this->setProperty('contentType', $contentType);
    }

    /**
     * An application that can complete the request.
     *
     * @param \Spatie\SchemaOrg\SoftwareApplication $application
     *
     * @return static
     *
     * @see http://schema.org/application
     */
    public function application($application)
    {
        return $this->setProperty('application', $application);
    }

    /**
     * An application that can complete the request.
     *
     * @param \Spatie\SchemaOrg\SoftwareApplication $actionApplication
     *
     * @return static
     *
     * @see http://schema.org/actionApplication
     */
    public function actionApplication($actionApplication)
    {
        return $this->setProperty('actionApplication', $actionApplication);
    }

    /**
     * An url template (RFC6570) that will be used to construct the target of
     * the execution of the action.
     *
     * @param string $urlTemplate
     *
     * @return static
     *
     * @see http://schema.org/urlTemplate
     */
    public function urlTemplate($urlTemplate)
    {
        return $this->setProperty('urlTemplate', $urlTemplate);
    }

}
