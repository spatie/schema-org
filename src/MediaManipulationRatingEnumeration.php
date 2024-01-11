<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\MediaManipulationRatingEnumerationContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 *  Codes for use with the [[mediaAuthenticityCategory]] property, indicating
 * the authenticity of a media object (in the context of how it was published or
 * shared). In general these codes are not mutually exclusive, although some
 * combinations (such as 'original' versus 'transformed', 'edited' and 'staged')
 * would be contradictory if applied in the same [[MediaReview]]. Note that the
 * application of these codes is with regard to a piece of media shared or
 * published in a particular context.
 *
 * @see https://schema.org/MediaManipulationRatingEnumeration
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2450
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class MediaManipulationRatingEnumeration extends BaseType implements MediaManipulationRatingEnumerationContract, EnumerationContract, IntangibleContract, ThingContract
{
    /**
     * Content coded 'missing context' in a [[MediaReview]], considered in the
     * context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'missing context': Presenting unaltered video
     * in an inaccurate manner that misrepresents the footage. For example,
     * using incorrect dates or locations, altering the transcript or sharing
     * brief clips from a longer video to mislead viewers. (A video rated
     * 'original' can also be missing context.)
     *
     * For an [[ImageObject]] to be 'missing context': Presenting unaltered
     * images in an inaccurate manner to misrepresent the image and mislead the
     * viewer. For example, a common tactic is using an unaltered image but
     * saying it came from a different time or place. (An image rated 'original'
     * can also be missing context.)
     *
     * For an [[ImageObject]] with embedded text to be 'missing context': An
     * unaltered image presented in an inaccurate manner to misrepresent the
     * image and mislead the viewer. For example, a common tactic is using an
     * unaltered image but saying it came from a different time or place. (An
     * 'original' image with inaccurate text would generally fall in this
     * category.)
     *
     * For an [[AudioObject]] to be 'missing context': Unaltered audio presented
     * in an inaccurate manner that misrepresents it. For example, using
     * incorrect dates or locations, or sharing brief clips from a longer
     * recording to mislead viewers. (Audio rated “original” can also be
     * missing context.)
     *
     * @see https://schema.org/DecontextualizedContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const DecontextualizedContent = 'https://schema.org/DecontextualizedContent';

    /**
     * Content coded 'edited or cropped content' in a [[MediaReview]],
     * considered in the context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'edited or cropped content': The video has
     * been edited or rearranged. This category applies to time edits, including
     * editing multiple videos together to alter the story being told or editing
     * out large portions from a video.
     *
     * For an [[ImageObject]] to be 'edited or cropped content': Presenting a
     * part of an image from a larger whole to mislead the viewer.
     *
     * For an [[ImageObject]] with embedded text to be 'edited or cropped
     * content': Presenting a part of an image from a larger whole to mislead
     * the viewer.
     *
     * For an [[AudioObject]] to be 'edited or cropped content': The audio has
     * been edited or rearranged. This category applies to time edits, including
     * editing multiple audio clips together to alter the story being told or
     * editing out large portions from the recording.
     *
     * @see https://schema.org/EditedOrCroppedContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const EditedOrCroppedContent = 'https://schema.org/EditedOrCroppedContent';

    /**
     * Content coded 'as original media content' in a [[MediaReview]],
     * considered in the context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'original': No evidence the footage has been
     * misleadingly altered or manipulated, though it may contain false or
     * misleading claims.
     *
     * For an [[ImageObject]] to be 'original': No evidence the image has been
     * misleadingly altered or manipulated, though it may still contain false or
     * misleading claims.
     *
     * For an [[ImageObject]] with embedded text to be 'original': No evidence
     * the image has been misleadingly altered or manipulated, though it may
     * still contain false or misleading claims.
     *
     * For an [[AudioObject]] to be 'original': No evidence the audio has been
     * misleadingly altered or manipulated, though it may contain false or
     * misleading claims.
     *
     * @see https://schema.org/OriginalMediaContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const OriginalMediaContent = 'https://schema.org/OriginalMediaContent';

    /**
     * Content coded 'satire or parody content' in a [[MediaReview]], considered
     * in the context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'satire or parody content': A video that was
     * created as political or humorous commentary and is presented in that
     * context. (Reshares of satire/parody content that do not include relevant
     * context are more likely to fall under the “missing context” rating.)
     *
     * For an [[ImageObject]] to be 'satire or parody content': An image that
     * was created as political or humorous commentary and is presented in that
     * context. (Reshares of satire/parody content that do not include relevant
     * context are more likely to fall under the “missing context” rating.)
     *
     * For an [[ImageObject]] with embedded text to be 'satire or parody
     * content': An image that was created as political or humorous commentary
     * and is presented in that context. (Reshares of satire/parody content that
     * do not include relevant context are more likely to fall under the
     * “missing context” rating.)
     *
     * For an [[AudioObject]] to be 'satire or parody content': Audio that was
     * created as political or humorous commentary and is presented in that
     * context. (Reshares of satire/parody content that do not include relevant
     * context are more likely to fall under the “missing context” rating.)
     *
     * @see https://schema.org/SatireOrParodyContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const SatireOrParodyContent = 'https://schema.org/SatireOrParodyContent';

    /**
     * Content coded 'staged content' in a [[MediaReview]], considered in the
     * context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'staged content': A video that has been
     * created using actors or similarly contrived.
     *
     * For an [[ImageObject]] to be 'staged content': An image that was created
     * using actors or similarly contrived, such as a screenshot of a fake
     * tweet.
     *
     * For an [[ImageObject]] with embedded text to be 'staged content': An
     * image that was created using actors or similarly contrived, such as a
     * screenshot of a fake tweet.
     *
     * For an [[AudioObject]] to be 'staged content': Audio that has been
     * created using actors or similarly contrived.
     *
     * @see https://schema.org/StagedContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const StagedContent = 'https://schema.org/StagedContent';

    /**
     * Content coded 'transformed content' in a [[MediaReview]], considered in
     * the context of how it was published or shared.
     *
     * For a [[VideoObject]] to be 'transformed content':  or all of the video
     * has been manipulated to transform the footage itself. This category
     * includes using tools like the Adobe Suite to change the speed of the
     * video, add or remove visual elements or dub audio. Deepfakes are also a
     * subset of transformation.
     *
     * For an [[ImageObject]] to be 'transformed content': Adding or deleting
     * visual elements to give the image a different meaning with the intention
     * to mislead.
     *
     * For an [[ImageObject]] with embedded text to be 'transformed content':
     * Adding or deleting visual elements to give the image a different meaning
     * with the intention to mislead.
     *
     * For an [[AudioObject]] to be 'transformed content': Part or all of the
     * audio has been manipulated to alter the words or sounds, or the audio has
     * been synthetically generated, such as to create a sound-alike voice.
     *
     * @see https://schema.org/TransformedContent
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2450
     */
    public const TransformedContent = 'https://schema.org/TransformedContent';

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
