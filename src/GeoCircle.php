<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\GeoCircleContract;
use Spatie\SchemaOrg\Contracts\GeoShapeContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\StructuredValueContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a
 * GeoShape
 *           it provides the simple textual property 'circle', but also allows
 * the combination of postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint'
 * property, or more approximately using 'address', 'postalCode'.
 *
 * @see https://schema.org/GeoCircle
 *
 */
class GeoCircle extends BaseType implements GeoCircleContract, GeoShapeContract, IntangibleContract, StructuredValueContract, ThingContract
{
    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in. In RDFa
     * syntax, it is better to use the native RDFa syntax - the 'typeof'
     * attribute - for multiple types. Schema.org tools may have only weaker
     * understanding of extra types, in particular those defined externally.
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
     * Physical address of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\PostalAddressContract|\Spatie\SchemaOrg\Contracts\PostalAddressContract[]|string|string[] $address
     *
     * @return static
     *
     * @see https://schema.org/address
     */
    public function address($address)
    {
        return $this->setProperty('address', $address);
    }

    /**
     * The country. For example, USA. You can also provide the two-letter [ISO
     * 3166-1 alpha-2 country code](http://en.wikipedia.org/wiki/ISO_3166-1).
     *
     * @param \Spatie\SchemaOrg\Contracts\CountryContract|\Spatie\SchemaOrg\Contracts\CountryContract[]|string|string[] $addressCountry
     *
     * @return static
     *
     * @see https://schema.org/addressCountry
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function addressCountry($addressCountry)
    {
        return $this->setProperty('addressCountry', $addressCountry);
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
     * A box is the area enclosed by the rectangle formed by two points. The
     * first point is the lower corner, the second point is the upper corner. A
     * box is expressed as two points separated by a space character.
     *
     * @param string|string[] $box
     *
     * @return static
     *
     * @see https://schema.org/box
     */
    public function box($box)
    {
        return $this->setProperty('box', $box);
    }

    /**
     * A circle is the circular region of a specified radius centered at a
     * specified latitude and longitude. A circle is expressed as a pair
     * followed by a radius in meters.
     *
     * @param string|string[] $circle
     *
     * @return static
     *
     * @see https://schema.org/circle
     */
    public function circle($circle)
    {
        return $this->setProperty('circle', $circle);
    }

    /**
     * A description of the item.
     *
     * @param string|string[] $description
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
     * The elevation of a location ([WGS
     * 84](https://en.wikipedia.org/wiki/World_Geodetic_System)). Values may be
     * of the form 'NUMBER UNIT\_OF\_MEASUREMENT' (e.g., '1,000 m', '3,200 ft')
     * while numbers alone should be assumed to be a value in meters.
     *
     * @param float|float[]|int|int[]|string|string[] $elevation
     *
     * @return static
     *
     * @see https://schema.org/elevation
     */
    public function elevation($elevation)
    {
        return $this->setProperty('elevation', $elevation);
    }

    /**
     * Indicates the GeoCoordinates at the centre of a GeoShape, e.g. GeoCircle.
     *
     * @param \Spatie\SchemaOrg\Contracts\GeoCoordinatesContract|\Spatie\SchemaOrg\Contracts\GeoCoordinatesContract[] $geoMidpoint
     *
     * @return static
     *
     * @see https://schema.org/geoMidpoint
     */
    public function geoMidpoint($geoMidpoint)
    {
        return $this->setProperty('geoMidpoint', $geoMidpoint);
    }

    /**
     * Indicates the approximate radius of a GeoCircle (metres unless indicated
     * otherwise via Distance notation).
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|float|float[]|int|int[]|string|string[] $geoRadius
     *
     * @return static
     *
     * @see https://schema.org/geoRadius
     */
    public function geoRadius($geoRadius)
    {
        return $this->setProperty('geoRadius', $geoRadius);
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
     * A line is a point-to-point path consisting of two or more points. A line
     * is expressed as a series of two or more point objects separated by space.
     *
     * @param string|string[] $line
     *
     * @return static
     *
     * @see https://schema.org/line
     */
    public function line($line)
    {
        return $this->setProperty('line', $line);
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
     * A polygon is the area enclosed by a point-to-point path for which the
     * starting and ending points are the same. A polygon is expressed as a
     * series of four or more space delimited points where the first and final
     * points are identical.
     *
     * @param string|string[] $polygon
     *
     * @return static
     *
     * @see https://schema.org/polygon
     */
    public function polygon($polygon)
    {
        return $this->setProperty('polygon', $polygon);
    }

    /**
     * The postal code. For example, 94043.
     *
     * @param string|string[] $postalCode
     *
     * @return static
     *
     * @see https://schema.org/postalCode
     * @link https://github.com/schemaorg/schemaorg/issues/2506
     */
    public function postalCode($postalCode)
    {
        return $this->setProperty('postalCode', $postalCode);
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
