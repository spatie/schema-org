<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\BroadcastChannelContract;
use Spatie\SchemaOrg\Contracts\FMRadioChannelContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\RadioChannelContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A radio channel that uses FM.
 *
 * @see https://schema.org/FMRadioChannel
 * @link https://github.com/schemaorg/schemaorg/issues/1004
 *
 */
class FMRadioChannel extends BaseType implements FMRadioChannelContract, BroadcastChannelContract, IntangibleContract, RadioChannelContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * Typically the value is a URI-identified RDF class, and in this case
     * corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org [style
     * guide](https://schema.org/docs/styleguide.html).
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * The unique address by which the BroadcastService can be identified in a
     * provider lineup. In US, this is typically a number.
     *
     * @param string|string[] $broadcastChannelId
     *
     * @return static
     *
     * @see https://schema.org/broadcastChannelId
     */
    public function broadcastChannelId($broadcastChannelId)
    {
        return $this->setProperty('broadcastChannelId', $broadcastChannelId);
    }

    /**
     * The frequency used for over-the-air broadcasts. Numeric values or simple
     * ranges, e.g. 87-99. In addition a shortcut idiom is supported for
     * frequencies of AM and FM radio channels, e.g. "87 FM".
     *
     * @param \Spatie\SchemaOrg\Contracts\BroadcastFrequencySpecificationContract|\Spatie\SchemaOrg\Contracts\BroadcastFrequencySpecificationContract[]|string|string[] $broadcastFrequency
     *
     * @return static
     *
     * @see https://schema.org/broadcastFrequency
     * @link https://github.com/schemaorg/schemaorg/issues/1004
     */
    public function broadcastFrequency($broadcastFrequency)
    {
        return $this->setProperty('broadcastFrequency', $broadcastFrequency);
    }

    /**
     * The type of service required to have access to the channel (e.g. Standard
     * or Premium).
     *
     * @param string|string[] $broadcastServiceTier
     *
     * @return static
     *
     * @see https://schema.org/broadcastServiceTier
     */
    public function broadcastServiceTier($broadcastServiceTier)
    {
        return $this->setProperty('broadcastServiceTier', $broadcastServiceTier);
    }

    /**
     * A description of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\TextObjectContract|\Spatie\SchemaOrg\Contracts\TextObjectContract[]|string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string|string[] $genre
     *
     * @return static
     *
     * @see https://schema.org/genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * The CableOrSatelliteService offering the channel.
     *
     * @param \Spatie\SchemaOrg\Contracts\CableOrSatelliteServiceContract|\Spatie\SchemaOrg\Contracts\CableOrSatelliteServiceContract[] $inBroadcastLineup
     *
     * @return static
     *
     * @see https://schema.org/inBroadcastLineup
     */
    public function inBroadcastLineup($inBroadcastLineup)
    {
        return $this->setProperty('inBroadcastLineup', $inBroadcastLineup);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * The BroadcastService offered on this channel.
     *
     * @param \Spatie\SchemaOrg\Contracts\BroadcastServiceContract|\Spatie\SchemaOrg\Contracts\BroadcastServiceContract[] $providesBroadcastService
     *
     * @return static
     *
     * @see https://schema.org/providesBroadcastService
     */
    public function providesBroadcastService($providesBroadcastService)
    {
        return $this->setProperty('providesBroadcastService', $providesBroadcastService);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}
