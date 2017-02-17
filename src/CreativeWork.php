<?php

namespace Spatie\SchemaOrg;

/**
 * The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
 *
 * @see http://schema.org/CreativeWork
 */
class CreativeWork extends Thing
{
    /**
     * Indicates (by URL or string) a particular version of a schema used in
     * some CreativeWork. For example, a document could declare a schemaVersion
     * using an URL such as http://schema.org/version/2.0/ if precise indication
     * of schema version was required by some application.
     *
     * @param string $schemaVersion
     *
     * @return static
     *
     * @see http://schema.org/schemaVersion
     */
    public function schemaVersion($schemaVersion)
    {
        return $this->setProperty('schemaVersion', $schemaVersion);
    }

    /**
     * The subject matter of the content.
     *
     * @param \Spatie\SchemaOrg\Thing $about
     *
     * @return static
     *
     * @see http://schema.org/about
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * Indicates that the resource is compatible with the referenced
     * accessibility API ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string $accessibilityAPI
     *
     * @return static
     *
     * @see http://schema.org/accessibilityAPI
     */
    public function accessibilityAPI($accessibilityAPI)
    {
        return $this->setProperty('accessibilityAPI', $accessibilityAPI);
    }

    /**
     * Identifies input methods that are sufficient to fully control the
     * described resource ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string $accessibilityControl
     *
     * @return static
     *
     * @see http://schema.org/accessibilityControl
     */
    public function accessibilityControl($accessibilityControl)
    {
        return $this->setProperty('accessibilityControl', $accessibilityControl);
    }

    /**
     * Content features of the resource, such as accessible media, alternatives
     * and supported enhancements for accessibility ([WebSchemas wiki lists
     * possible values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string $accessibilityFeature
     *
     * @return static
     *
     * @see http://schema.org/accessibilityFeature
     */
    public function accessibilityFeature($accessibilityFeature)
    {
        return $this->setProperty('accessibilityFeature', $accessibilityFeature);
    }

    /**
     * A characteristic of the described resource that is physiologically
     * dangerous to some users. Related to WCAG 2.0 guideline 2.3 ([WebSchemas
     * wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string $accessibilityHazard
     *
     * @return static
     *
     * @see http://schema.org/accessibilityHazard
     */
    public function accessibilityHazard($accessibilityHazard)
    {
        return $this->setProperty('accessibilityHazard', $accessibilityHazard);
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Person $accountablePerson
     *
     * @return static
     *
     * @see http://schema.org/accountablePerson
     */
    public function accountablePerson($accountablePerson)
    {
        return $this->setProperty('accountablePerson', $accountablePerson);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\AggregateRating $aggregateRating
     *
     * @return static
     *
     * @see http://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * A secondary title of the CreativeWork.
     *
     * @param string $alternativeHeadline
     *
     * @return static
     *
     * @see http://schema.org/alternativeHeadline
     */
    public function alternativeHeadline($alternativeHeadline)
    {
        return $this->setProperty('alternativeHeadline', $alternativeHeadline);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @param \Spatie\SchemaOrg\MediaObject $associatedMedia
     *
     * @return static
     *
     * @see http://schema.org/associatedMedia
     */
    public function associatedMedia($associatedMedia)
    {
        return $this->setProperty('associatedMedia', $associatedMedia);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Spatie\SchemaOrg\Audience $audience
     *
     * @return static
     *
     * @see http://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An embedded audio object.
     *
     * @param \Spatie\SchemaOrg\AudioObject $audio
     *
     * @return static
     *
     * @see http://schema.org/audio
     */
    public function audio($audio)
    {
        return $this->setProperty('audio', $audio);
    }

    /**
     * The author of this content or rating. Please note that author is special
     * in that HTML 5 provides a special mechanism for indicating authorship via
     * the rel tag. That is equivalent to this and may be used interchangeably.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $author
     *
     * @return static
     *
     * @see http://schema.org/author
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * An award won by or for this item.
     *
     * @param string $award
     *
     * @return static
     *
     * @see http://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string $awards
     *
     * @return static
     *
     * @see http://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc.
     *
     * @param \Spatie\SchemaOrg\CreativeWork|string $citation
     *
     * @return static
     *
     * @see http://schema.org/citation
     */
    public function citation($citation)
    {
        return $this->setProperty('citation', $citation);
    }

    /**
     * Comments, typically from users.
     *
     * @param \Spatie\SchemaOrg\Comment $comment
     *
     * @return static
     *
     * @see http://schema.org/comment
     */
    public function comment($comment)
    {
        return $this->setProperty('comment', $comment);
    }

    /**
     * The location depicted or described in the content. For example, the
     * location in a photograph or painting.
     *
     * @param \Spatie\SchemaOrg\Place $contentLocation
     *
     * @return static
     *
     * @see http://schema.org/contentLocation
     */
    public function contentLocation($contentLocation)
    {
        return $this->setProperty('contentLocation', $contentLocation);
    }

    /**
     * The location where the CreativeWork was created, which may not be the
     * same as the location depicted in the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Place $locationCreated
     *
     * @return static
     *
     * @see http://schema.org/locationCreated
     */
    public function locationCreated($locationCreated)
    {
        return $this->setProperty('locationCreated', $locationCreated);
    }

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     * @param string $contentRating
     *
     * @return static
     *
     * @see http://schema.org/contentRating
     */
    public function contentRating($contentRating)
    {
        return $this->setProperty('contentRating', $contentRating);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $contributor
     *
     * @return static
     *
     * @see http://schema.org/contributor
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $copyrightHolder
     *
     * @return static
     *
     * @see http://schema.org/copyrightHolder
     */
    public function copyrightHolder($copyrightHolder)
    {
        return $this->setProperty('copyrightHolder', $copyrightHolder);
    }

    /**
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     *
     * @param float|int $copyrightYear
     *
     * @return static
     *
     * @see http://schema.org/copyrightYear
     */
    public function copyrightYear($copyrightYear)
    {
        return $this->setProperty('copyrightYear', $copyrightYear);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $creator
     *
     * @return static
     *
     * @see http://schema.org/creator
     */
    public function creator($creator)
    {
        return $this->setProperty('creator', $creator);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param \DateTimeInterface $dateCreated
     *
     * @return static
     *
     * @see http://schema.org/dateCreated
     */
    public function dateCreated($dateCreated)
    {
        return $this->setProperty('dateCreated', $dateCreated);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @param \DateTimeInterface $dateModified
     *
     * @return static
     *
     * @see http://schema.org/dateModified
     */
    public function dateModified($dateModified)
    {
        return $this->setProperty('dateModified', $dateModified);
    }

    /**
     * Date of first broadcast/publication.
     *
     * @param \DateTimeInterface $datePublished
     *
     * @return static
     *
     * @see http://schema.org/datePublished
     */
    public function datePublished($datePublished)
    {
        return $this->setProperty('datePublished', $datePublished);
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param string $discussionUrl
     *
     * @return static
     *
     * @see http://schema.org/discussionUrl
     */
    public function discussionUrl($discussionUrl)
    {
        return $this->setProperty('discussionUrl', $discussionUrl);
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Person $editor
     *
     * @return static
     *
     * @see http://schema.org/editor
     */
    public function editor($editor)
    {
        return $this->setProperty('editor', $editor);
    }

    /**
     * An alignment to an established educational framework.
     *
     * @param \Spatie\SchemaOrg\AlignmentObject $educationalAlignment
     *
     * @return static
     *
     * @see http://schema.org/educationalAlignment
     */
    public function educationalAlignment($educationalAlignment)
    {
        return $this->setProperty('educationalAlignment', $educationalAlignment);
    }

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @param string $educationalUse
     *
     * @return static
     *
     * @see http://schema.org/educationalUse
     */
    public function educationalUse($educationalUse)
    {
        return $this->setProperty('educationalUse', $educationalUse);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia.
     *
     * @param \Spatie\SchemaOrg\MediaObject $encoding
     *
     * @return static
     *
     * @see http://schema.org/encoding
     */
    public function encoding($encoding)
    {
        return $this->setProperty('encoding', $encoding);
    }

    /**
     * A media object that encodes this CreativeWork.
     *
     * @param \Spatie\SchemaOrg\MediaObject $encodings
     *
     * @return static
     *
     * @see http://schema.org/encodings
     */
    public function encodings($encodings)
    {
        return $this->setProperty('encodings', $encodings);
    }

    /**
     * Media type, typically MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml)) of
     * the content e.g. application/zip of a SoftwareApplication binary. In
     * cases where a CreativeWork has several media type representations,
     * 'encoding' can be used to indicate each MediaObject alongside particular
     * fileFormat information. Unregistered or niche file formats can be
     * indicated instead via the most appropriate URL, e.g. defining Web page or
     * a Wikipedia entry.
     *
     * @param string $fileFormat
     *
     * @return static
     *
     * @see http://schema.org/fileFormat
     */
    public function fileFormat($fileFormat)
    {
        return $this->setProperty('fileFormat', $fileFormat);
    }

    /**
     * A flag to signal that the publication is accessible for free.
     *
     * @param bool $isAccessibleForFree
     *
     * @return static
     *
     * @see http://schema.org/isAccessibleForFree
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string $genre
     *
     * @return static
     *
     * @see http://schema.org/genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * Headline of the article.
     *
     * @param string $headline
     *
     * @return static
     *
     * @see http://schema.org/headline
     */
    public function headline($headline)
    {
        return $this->setProperty('headline', $headline);
    }

    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param string|\Spatie\SchemaOrg\Language $inLanguage
     *
     * @return static
     *
     * @see http://schema.org/inLanguage
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @param string $interactivityType
     *
     * @return static
     *
     * @see http://schema.org/interactivityType
     */
    public function interactivityType($interactivityType)
    {
        return $this->setProperty('interactivityType', $interactivityType);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param string|\Spatie\SchemaOrg\CreativeWork|\Spatie\SchemaOrg\Product $isBasedOnUrl
     *
     * @return static
     *
     * @see http://schema.org/isBasedOnUrl
     */
    public function isBasedOnUrl($isBasedOnUrl)
    {
        return $this->setProperty('isBasedOnUrl', $isBasedOnUrl);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param string|\Spatie\SchemaOrg\CreativeWork|\Spatie\SchemaOrg\Product $isBasedOn
     *
     * @return static
     *
     * @see http://schema.org/isBasedOn
     */
    public function isBasedOn($isBasedOn)
    {
        return $this->setProperty('isBasedOn', $isBasedOn);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool $isFamilyFriendly
     *
     * @return static
     *
     * @see http://schema.org/isFamilyFriendly
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * Indicates a CreativeWork that this CreativeWork is (in some sense) part
     * of.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $isPartOf
     *
     * @return static
     *
     * @see http://schema.org/isPartOf
     */
    public function isPartOf($isPartOf)
    {
        return $this->setProperty('isPartOf', $isPartOf);
    }

    /**
     * Keywords or tags used to describe this content. Multiple entries in a
     * keywords list are typically delimited by commas.
     *
     * @param string $keywords
     *
     * @return static
     *
     * @see http://schema.org/keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * A license document that applies to this content, typically indicated by
     * URL.
     *
     * @param \Spatie\SchemaOrg\CreativeWork|string $license
     *
     * @return static
     *
     * @see http://schema.org/license
     */
    public function license($license)
    {
        return $this->setProperty('license', $license);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @param string $learningResourceType
     *
     * @return static
     *
     * @see http://schema.org/learningResourceType
     */
    public function learningResourceType($learningResourceType)
    {
        return $this->setProperty('learningResourceType', $learningResourceType);
    }

    /**
     * Indicates the primary entity described in some page or other
     * CreativeWork.
     *
     * @param \Spatie\SchemaOrg\Thing $mainEntity
     *
     * @return static
     *
     * @see http://schema.org/mainEntity
     */
    public function mainEntity($mainEntity)
    {
        return $this->setProperty('mainEntity', $mainEntity);
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @param \Spatie\SchemaOrg\Thing $mentions
     *
     * @return static
     *
     * @see http://schema.org/mentions
     */
    public function mentions($mentions)
    {
        return $this->setProperty('mentions', $mentions);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param \Spatie\SchemaOrg\Offer $offers
     *
     * @return static
     *
     * @see http://schema.org/offers
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     * @param string|int $position
     *
     * @return static
     *
     * @see http://schema.org/position
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
    }

    /**
     * The person or organization who produced the work (e.g. music album,
     * movie, tv/radio series etc.).
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $producer
     *
     * @return static
     *
     * @see http://schema.org/producer
     */
    public function producer($producer)
    {
        return $this->setProperty('producer', $producer);
    }

    /**
     * A publication event associated with the item.
     *
     * @param \Spatie\SchemaOrg\PublicationEvent $publication
     *
     * @return static
     *
     * @see http://schema.org/publication
     */
    public function publication($publication)
    {
        return $this->setProperty('publication', $publication);
    }

    /**
     * The publisher of the creative work.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $publisher
     *
     * @return static
     *
     * @see http://schema.org/publisher
     */
    public function publisher($publisher)
    {
        return $this->setProperty('publisher', $publisher);
    }

    /**
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     *
     * @param string $publishingPrinciples
     *
     * @return static
     *
     * @see http://schema.org/publishingPrinciples
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may
     * capture all or part of the event.
     *
     * @param \Spatie\SchemaOrg\Event $recordedAt
     *
     * @return static
     *
     * @see http://schema.org/recordedAt
     */
    public function recordedAt($recordedAt)
    {
        return $this->setProperty('recordedAt', $recordedAt);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Review $review
     *
     * @return static
     *
     * @see http://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Review $reviews
     *
     * @return static
     *
     * @see http://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @param \Spatie\SchemaOrg\Organization $sourceOrganization
     *
     * @return static
     *
     * @see http://schema.org/sourceOrganization
     */
    public function sourceOrganization($sourceOrganization)
    {
        return $this->setProperty('sourceOrganization', $sourceOrganization);
    }

    /**
     * The spatialCoverage of a CreativeWork indicates the place(s) which are
     * the focus of the content. It is a subproperty of
     *       contentLocation intended primarily for more technical and detailed
     * materials. For example with a Dataset, it indicates
     *       areas that the dataset describes: a dataset of New York weather
     * would have spatialCoverage which was the place: the state of New York.
     *
     * @param \Spatie\SchemaOrg\Place $spatialCoverage
     *
     * @return static
     *
     * @see http://schema.org/spatialCoverage
     */
    public function spatialCoverage($spatialCoverage)
    {
        return $this->setProperty('spatialCoverage', $spatialCoverage);
    }

    /**
     * A person or organization that supports a thing through a pledge, promise,
     * or financial contribution. e.g. a sponsor of a Medical Study or a
     * corporate sponsor of an event.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $sponsor
     *
     * @return static
     *
     * @see http://schema.org/sponsor
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $funder
     *
     * @return static
     *
     * @see http://schema.org/funder
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * The temporalCoverage of a CreativeWork indicates the period that the
     * content applies to, i.e. that it describes, either as a DateTime or as a
     * textual string indicating a time period in [ISO 8601 time interval
     * format](https://en.wikipedia.org/wiki/ISO_8601#Time_intervals). In
     *       the case of a Dataset it will typically indicate the relevant time
     * period in a precise notation (e.g. for a 2011 census dataset, the year
     * 2011 would be written "2011/2012"). Other forms of content e.g.
     * ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their
     * temporalCoverage in broader terms - textually or via well-known URL.
     *       Written works such as books may sometimes have precise temporal
     * coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601
     * interval format format via "1939/1945".
     *
     * @param \DateTimeInterface|string $temporalCoverage
     *
     * @return static
     *
     * @see http://schema.org/temporalCoverage
     */
    public function temporalCoverage($temporalCoverage)
    {
        return $this->setProperty('temporalCoverage', $temporalCoverage);
    }

    /**
     * The textual content of this CreativeWork.
     *
     * @param string $text
     *
     * @return static
     *
     * @see http://schema.org/text
     */
    public function text($text)
    {
        return $this->setProperty('text', $text);
    }

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @param string $thumbnailUrl
     *
     * @return static
     *
     * @see http://schema.org/thumbnailUrl
     */
    public function thumbnailUrl($thumbnailUrl)
    {
        return $this->setProperty('thumbnailUrl', $thumbnailUrl);
    }

    /**
     * Approximate or typical time it takes to work with or through this
     * learning resource for the typical intended target audience, e.g. 'P30M',
     * 'P1H25M'.
     *
     * @param \Spatie\SchemaOrg\Duration $timeRequired
     *
     * @return static
     *
     * @see http://schema.org/timeRequired
     */
    public function timeRequired($timeRequired)
    {
        return $this->setProperty('timeRequired', $timeRequired);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string $typicalAgeRange
     *
     * @return static
     *
     * @see http://schema.org/typicalAgeRange
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param float|int|string $version
     *
     * @return static
     *
     * @see http://schema.org/version
     */
    public function version($version)
    {
        return $this->setProperty('version', $version);
    }

    /**
     * An embedded video object.
     *
     * @param \Spatie\SchemaOrg\VideoObject $video
     *
     * @return static
     *
     * @see http://schema.org/video
     */
    public function video($video)
    {
        return $this->setProperty('video', $video);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $provider
     *
     * @return static
     *
     * @see http://schema.org/provider
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or
     * Answer) has received. This is most applicable to works published in Web
     * sites with commenting system; additional comments may exist elsewhere.
     *
     * @param int $commentCount
     *
     * @return static
     *
     * @see http://schema.org/commentCount
     */
    public function commentCount($commentCount)
    {
        return $this->setProperty('commentCount', $commentCount);
    }

    /**
     * Indicates a CreativeWork that is (in some sense) a part of this
     * CreativeWork.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $hasPart
     *
     * @return static
     *
     * @see http://schema.org/hasPart
     */
    public function hasPart($hasPart)
    {
        return $this->setProperty('hasPart', $hasPart);
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative
     * work. eg. The paperback edition, first edition, or eBook.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $workExample
     *
     * @return static
     *
     * @see http://schema.org/workExample
     */
    public function workExample($workExample)
    {
        return $this->setProperty('workExample', $workExample);
    }

    /**
     * A creative work that this work is an
     * example/instance/realization/derivation of.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $exampleOfWork
     *
     * @return static
     *
     * @see http://schema.org/exampleOfWork
     */
    public function exampleOfWork($exampleOfWork)
    {
        return $this->setProperty('exampleOfWork', $exampleOfWork);
    }

    /**
     * Fictional person connected with a creative work.
     *
     * @param \Spatie\SchemaOrg\Person $character
     *
     * @return static
     *
     * @see http://schema.org/character
     */
    public function character($character)
    {
        return $this->setProperty('character', $character);
    }

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or
     * that translates during some event.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $translator
     *
     * @return static
     *
     * @see http://schema.org/translator
     */
    public function translator($translator)
    {
        return $this->setProperty('translator', $translator);
    }

    /**
     * The place and time the release was issued, expressed as a
     * PublicationEvent.
     *
     * @param \Spatie\SchemaOrg\PublicationEvent $releasedEvent
     *
     * @return static
     *
     * @see http://schema.org/releasedEvent
     */
    public function releasedEvent($releasedEvent)
    {
        return $this->setProperty('releasedEvent', $releasedEvent);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param string|\Spatie\SchemaOrg\Product $material
     *
     * @return static
     *
     * @see http://schema.org/material
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @param \Spatie\SchemaOrg\InteractionCounter $interactionStatistic
     *
     * @return static
     *
     * @see http://schema.org/interactionStatistic
     */
    public function interactionStatistic($interactionStatistic)
    {
        return $this->setProperty('interactionStatistic', $interactionStatistic);
    }

}
