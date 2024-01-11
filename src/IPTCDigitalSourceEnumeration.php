<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\IPTCDigitalSourceEnumerationContract;
use Spatie\SchemaOrg\Contracts\MediaEnumerationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * [IPTC](https://www.iptc.org/) "Digital Source" codes for use with the
 * [[digitalSourceType]] property, providing information about the source for a
 * digital media object.
 * In general these codes are not declared here to be mutually exclusive,
 * although some combinations would be contradictory if applied simultaneously,
 * or might be considered mutually incompatible by upstream maintainers of the
 * definitions. See the IPTC
 * [documentation](https://www.iptc.org/std/photometadata/documentation/userguide/)
 *
 *  for [detailed definitions](https://cv.iptc.org/newscodes/digitalsourcetype/)
 * of all terms.
 *
 * @see https://schema.org/IPTCDigitalSourceEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/3392
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class IPTCDigitalSourceEnumeration extends BaseType implements IPTCDigitalSourceEnumerationContract, EnumerationContract, IntangibleContract, MediaEnumerationContract, ThingContract
{
    /**
     * Content coded as '[algorithmic
     * media](https://cv.iptc.org/newscodes/digitalsourcetype/algorithmicMedia)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/AlgorithmicMediaDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const AlgorithmicMediaDigitalSource = 'https://schema.org/AlgorithmicMediaDigitalSource';

    /**
     * Content coded as '[algorithmically
     * enhanced](https://cv.iptc.org/newscodes/digitalsourcetype/algorithmicallyEnhanced)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/AlgorithmicallyEnhancedDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const AlgorithmicallyEnhancedDigitalSource = 'https://schema.org/AlgorithmicallyEnhancedDigitalSource';

    /**
     * Content coded as '[composite
     * capture](https://cv.iptc.org/newscodes/digitalsourcetype/compositeCapture)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/CompositeCaptureDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const CompositeCaptureDigitalSource = 'https://schema.org/CompositeCaptureDigitalSource';

    /**
     * Content coded as '[composite
     * synthetic](https://cv.iptc.org/newscodes/digitalsourcetype/compositeSynthetic)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/CompositeSyntheticDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const CompositeSyntheticDigitalSource = 'https://schema.org/CompositeSyntheticDigitalSource';

    /**
     * Content coded as '[composite with trained algorithmic
     * media](https://cv.iptc.org/newscodes/digitalsourcetype/compositeWithTrainedAlgorithmicMedia)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/CompositeWithTrainedAlgorithmicMediaDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const CompositeWithTrainedAlgorithmicMediaDigitalSource = 'https://schema.org/CompositeWithTrainedAlgorithmicMediaDigitalSource';

    /**
     * Content coded as '[data driven
     * media](https://cv.iptc.org/newscodes/digitalsourcetype/dataDrivenMedia)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/DataDrivenMediaDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const DataDrivenMediaDigitalSource = 'https://schema.org/DataDrivenMediaDigitalSource';

    /**
     * Content coded as '[digital
     * art](https://cv.iptc.org/newscodes/digitalsourcetype/digitalArt)' using
     * the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/DigitalArtDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const DigitalArtDigitalSource = 'https://schema.org/DigitalArtDigitalSource';

    /**
     * Content coded as '[digital
     * capture](https://cv.iptc.org/newscodes/digitalsourcetype/digitalCapture)</a>'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/DigitalCaptureDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const DigitalCaptureDigitalSource = 'https://schema.org/DigitalCaptureDigitalSource';

    /**
     * Content coded as '[minor human
     * edits](https://cv.iptc.org/newscodes/digitalsourcetype/minorHumanEdits)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/MinorHumanEditsDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const MinorHumanEditsDigitalSource = 'https://schema.org/MinorHumanEditsDigitalSource';

    /**
     * Content coded as '[negative
     * film](https://cv.iptc.org/newscodes/digitalsourcetype/negativeFilm)</a>'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/NegativeFilmDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const NegativeFilmDigitalSource = 'https://schema.org/NegativeFilmDigitalSource';

    /**
     * Content coded as '[positive
     * film](https://cv.iptc.org/newscodes/digitalsourcetype/positiveFilm)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/PositiveFilmDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const PositiveFilmDigitalSource = 'https://schema.org/PositiveFilmDigitalSource';

    /**
     * Content coded as
     * '[print](https://cv.iptc.org/newscodes/digitalsourcetype/print)' using
     * the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/PrintDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const PrintDigitalSource = 'https://schema.org/PrintDigitalSource';

    /**
     * Content coded as '[trained algorithmic
     * media](https://cv.iptc.org/newscodes/digitalsourcetype/trainedAlgorithmicMedia)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/TrainedAlgorithmicMediaDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const TrainedAlgorithmicMediaDigitalSource = 'https://schema.org/TrainedAlgorithmicMediaDigitalSource';

    /**
     * Content coded as '[virtual
     * recording](https://cv.iptc.org/newscodes/digitalsourcetype/virtualRecording)'
     * using the IPTC [digital source
     * type](https://cv.iptc.org/newscodes/digitalsourcetype/) vocabulary.
     *
     * @see https://schema.org/VirtualRecordingDigitalSource
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3392
     */
    public const VirtualRecordingDigitalSource = 'https://schema.org/VirtualRecordingDigitalSource';

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
