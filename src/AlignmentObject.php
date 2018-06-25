<?php

namespace Spatie\SchemaOrg;

/**
 * An intangible item that describes an alignment between a learning resource
 * and a node in an educational framework.
 *
 * @see http://schema.org/AlignmentObject
 *
 * @mixin \Spatie\SchemaOrg\Intangible
 */
class AlignmentObject extends BaseType
{
    /**
     * A category of alignment between the learning resource and the framework
     * node. Recommended values include: 'assesses', 'teaches', 'requires',
     * 'textComplexity', 'readingLevel', 'educationalSubject', and
     * 'educationalLevel'.
     *
     * @param string|string[] $alignmentType
     *
     * @return static
     *
     * @see http://schema.org/alignmentType
     */
    public function alignmentType($alignmentType)
    {
        return $this->setProperty('alignmentType', $alignmentType);
    }

    /**
     * The framework to which the resource being described is aligned.
     *
     * @param string|string[] $educationalFramework
     *
     * @return static
     *
     * @see http://schema.org/educationalFramework
     */
    public function educationalFramework($educationalFramework)
    {
        return $this->setProperty('educationalFramework', $educationalFramework);
    }

    /**
     * The description of a node in an established educational framework.
     *
     * @param string|string[] $targetDescription
     *
     * @return static
     *
     * @see http://schema.org/targetDescription
     */
    public function targetDescription($targetDescription)
    {
        return $this->setProperty('targetDescription', $targetDescription);
    }

    /**
     * The name of a node in an established educational framework.
     *
     * @param string|string[] $targetName
     *
     * @return static
     *
     * @see http://schema.org/targetName
     */
    public function targetName($targetName)
    {
        return $this->setProperty('targetName', $targetName);
    }

    /**
     * The URL of a node in an established educational framework.
     *
     * @param string|string[] $targetUrl
     *
     * @return static
     *
     * @see http://schema.org/targetUrl
     */
    public function targetUrl($targetUrl)
    {
        return $this->setProperty('targetUrl', $targetUrl);
    }

}
