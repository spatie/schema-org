<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\GeospatialGeometryContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * (Eventually to be defined as) a supertype of GeoShape designed to accommodate
 * definitions from Geo-Spatial best practices.
 *
 * @see https://schema.org/GeospatialGeometry
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/1375
 *
 */
class GeospatialGeometry extends BaseType implements GeospatialGeometryContract, IntangibleContract, ThingContract
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
     * Represents a relationship between two geometries (or the places they
     * represent), relating a containing geometry to a contained geometry. "a
     * contains b iff no points of b lie in the exterior of a, and at least one
     * point of the interior of b lies in the interior of a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoContains
     *
     * @return static
     *
     * @see https://schema.org/geoContains
     */
    public function geoContains($geoContains)
    {
        return $this->setProperty('geoContains', $geoContains);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that covers it. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCoveredBy
     *
     * @return static
     *
     * @see https://schema.org/geoCoveredBy
     */
    public function geoCoveredBy($geoCoveredBy)
    {
        return $this->setProperty('geoCoveredBy', $geoCoveredBy);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a covering geometry to a covered geometry. "Every
     * point of b is a point of (the interior or boundary of) a". As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCovers
     *
     * @return static
     *
     * @see https://schema.org/geoCovers
     */
    public function geoCovers($geoCovers)
    {
        return $this->setProperty('geoCovers', $geoCovers);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that crosses it: "a crosses b:
     * they have some but not all interior points in common, and the dimension
     * of the intersection is less than that of at least one of them". As
     * defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoCrosses
     *
     * @return static
     *
     * @see https://schema.org/geoCrosses
     */
    public function geoCrosses($geoCrosses)
    {
        return $this->setProperty('geoCrosses', $geoCrosses);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically disjoint: "they have no point in common.
     * They form a set of disconnected geometries." (A symmetric relationship,
     * as defined in [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoDisjoint
     *
     * @return static
     *
     * @see https://schema.org/geoDisjoint
     */
    public function geoDisjoint($geoDisjoint)
    {
        return $this->setProperty('geoDisjoint', $geoDisjoint);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) are topologically equal, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM). "Two geometries are
     * topologically equal if their interiors intersect and no part of the
     * interior or boundary of one geometry intersects the exterior of the
     * other" (a symmetric relationship).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoEquals
     *
     * @return static
     *
     * @see https://schema.org/geoEquals
     */
    public function geoEquals($geoEquals)
    {
        return $this->setProperty('geoEquals', $geoEquals);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) have at least one point in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoIntersects
     *
     * @return static
     *
     * @see https://schema.org/geoIntersects
     */
    public function geoIntersects($geoIntersects)
    {
        return $this->setProperty('geoIntersects', $geoIntersects);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to another that geospatially overlaps it,
     * i.e. they have some but not all points in common. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoOverlaps
     *
     * @return static
     *
     * @see https://schema.org/geoOverlaps
     */
    public function geoOverlaps($geoOverlaps)
    {
        return $this->setProperty('geoOverlaps', $geoOverlaps);
    }

    /**
     * Represents spatial relations in which two geometries (or the places they
     * represent) touch: "they have at least one boundary point in common, but
     * no interior points." (A symmetric relationship, as defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).)
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoTouches
     *
     * @return static
     *
     * @see https://schema.org/geoTouches
     */
    public function geoTouches($geoTouches)
    {
        return $this->setProperty('geoTouches', $geoTouches);
    }

    /**
     * Represents a relationship between two geometries (or the places they
     * represent), relating a geometry to one that contains it, i.e. it is
     * inside (i.e. within) its interior. As defined in
     * [DE-9IM](https://en.wikipedia.org/wiki/DE-9IM).
     *
     * @param \Spatie\SchemaOrg\Contracts\GeospatialGeometryContract|\Spatie\SchemaOrg\Contracts\GeospatialGeometryContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[] $geoWithin
     *
     * @return static
     *
     * @see https://schema.org/geoWithin
     */
    public function geoWithin($geoWithin)
    {
        return $this->setProperty('geoWithin', $geoWithin);
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
