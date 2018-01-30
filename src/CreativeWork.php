<?php

namespace Spatie\SchemaOrg;

/**
 * The most generic kind of creative work, including books, movies, photographs,
 * software programs, etc.
 *
 * @see 
 */
class CreativeWork extends Thing
{
    /**
     * The subject matter of the content.
     *
     * @param Thing|Thing[] $about
     *
     * @return static
     *
     * @see 
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * The human sensory perceptual system or cognitive faculty through which a
     * person may process or perceive information. Expected values include:
     * auditory, tactile, textual, visual, colorDependent, chartOnVisual,
     * chemOnVisual, diagramOnVisual, mathOnVisual, musicOnVisual, textOnVisual.
     *
     * @param string|string[] $accessMode
     *
     * @return static
     *
     * @see 
     */
    public function accessMode($accessMode)
    {
        return $this->setProperty('accessMode', $accessMode);
    }

    /**
     * A list of single or combined accessModes that are sufficient to
     * understand all the intellectual content of a resource. Expected values
     * include:  auditory, tactile, textual, visual.
     *
     * @param string|string[] $accessModeSufficient
     *
     * @return static
     *
     * @see 
     */
    public function accessModeSufficient($accessModeSufficient)
    {
        return $this->setProperty('accessModeSufficient', $accessModeSufficient);
    }

    /**
     * Indicates that the resource is compatible with the referenced
     * accessibility API ([WebSchemas wiki lists possible
     * values](http://www.w3.org/wiki/WebSchemas/Accessibility)).
     *
     * @param string|string[] $accessibilityAPI
     *
     * @return static
     *
     * @see 
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
     * @param string|string[] $accessibilityControl
     *
     * @return static
     *
     * @see 
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
     * @param string|string[] $accessibilityFeature
     *
     * @return static
     *
     * @see 
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
     * @param string|string[] $accessibilityHazard
     *
     * @return static
     *
     * @see 
     */
    public function accessibilityHazard($accessibilityHazard)
    {
        return $this->setProperty('accessibilityHazard', $accessibilityHazard);
    }

    /**
     * A human-readable summary of specific accessibility features or
     * deficiencies, consistent with the other accessibility metadata but
     * expressing subtleties such as "short descriptions are present but long
     * descriptions will be needed for non-visual users" or "short descriptions
     * are present and no long descriptions are needed."
     *
     * @param string|string[] $accessibilitySummary
     *
     * @return static
     *
     * @see 
     */
    public function accessibilitySummary($accessibilitySummary)
    {
        return $this->setProperty('accessibilitySummary', $accessibilitySummary);
    }

    /**
     * Specifies the Person that is legally accountable for the CreativeWork.
     *
     * @param Person|Person[] $accountablePerson
     *
     * @return static
     *
     * @see 
     */
    public function accountablePerson($accountablePerson)
    {
        return $this->setProperty('accountablePerson', $accountablePerson);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param AggregateRating|AggregateRating[] $aggregateRating
     *
     * @return static
     *
     * @see 
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * A secondary title of the CreativeWork.
     *
     * @param string|string[] $alternativeHeadline
     *
     * @return static
     *
     * @see 
     */
    public function alternativeHeadline($alternativeHeadline)
    {
        return $this->setProperty('alternativeHeadline', $alternativeHeadline);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for encoding.
     *
     * @param MediaObject|MediaObject[] $associatedMedia
     *
     * @return static
     *
     * @see 
     */
    public function associatedMedia($associatedMedia)
    {
        return $this->setProperty('associatedMedia', $associatedMedia);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see 
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An embedded audio object.
     *
     * @param AudioObject|AudioObject[] $audio
     *
     * @return static
     *
     * @see 
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
     * @param Organization|Organization[]|Person|Person[] $author
     *
     * @return static
     *
     * @see 
     */
    public function author($author)
    {
        return $this->setProperty('author', $author);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see 
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see 
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * Fictional person connected with a creative work.
     *
     * @param Person|Person[] $character
     *
     * @return static
     *
     * @see 
     */
    public function character($character)
    {
        return $this->setProperty('character', $character);
    }

    /**
     * A citation or reference to another creative work, such as another
     * publication, web page, scholarly article, etc.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $citation
     *
     * @return static
     *
     * @see 
     */
    public function citation($citation)
    {
        return $this->setProperty('citation', $citation);
    }

    /**
     * Comments, typically from users.
     *
     * @param Comment|Comment[] $comment
     *
     * @return static
     *
     * @see 
     */
    public function comment($comment)
    {
        return $this->setProperty('comment', $comment);
    }

    /**
     * The number of comments this CreativeWork (e.g. Article, Question or
     * Answer) has received. This is most applicable to works published in Web
     * sites with commenting system; additional comments may exist elsewhere.
     *
     * @param int|int[] $commentCount
     *
     * @return static
     *
     * @see 
     */
    public function commentCount($commentCount)
    {
        return $this->setProperty('commentCount', $commentCount);
    }

    /**
     * The location depicted or described in the content. For example, the
     * location in a photograph or painting.
     *
     * @param Place|Place[] $contentLocation
     *
     * @return static
     *
     * @see 
     */
    public function contentLocation($contentLocation)
    {
        return $this->setProperty('contentLocation', $contentLocation);
    }

    /**
     * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
     *
     * @param string|string[] $contentRating
     *
     * @return static
     *
     * @see 
     */
    public function contentRating($contentRating)
    {
        return $this->setProperty('contentRating', $contentRating);
    }

    /**
     * A secondary contributor to the CreativeWork or Event.
     *
     * @param Organization|Organization[]|Person|Person[] $contributor
     *
     * @return static
     *
     * @see 
     */
    public function contributor($contributor)
    {
        return $this->setProperty('contributor', $contributor);
    }

    /**
     * The party holding the legal copyright to the CreativeWork.
     *
     * @param Organization|Organization[]|Person|Person[] $copyrightHolder
     *
     * @return static
     *
     * @see 
     */
    public function copyrightHolder($copyrightHolder)
    {
        return $this->setProperty('copyrightHolder', $copyrightHolder);
    }

    /**
     * The year during which the claimed copyright for the CreativeWork was
     * first asserted.
     *
     * @param float|float[]|int|int[] $copyrightYear
     *
     * @return static
     *
     * @see 
     */
    public function copyrightYear($copyrightYear)
    {
        return $this->setProperty('copyrightYear', $copyrightYear);
    }

    /**
     * The creator/author of this CreativeWork. This is the same as the Author
     * property for CreativeWork.
     *
     * @param Organization|Organization[]|Person|Person[] $creator
     *
     * @return static
     *
     * @see 
     */
    public function creator($creator)
    {
        return $this->setProperty('creator', $creator);
    }

    /**
     * The date on which the CreativeWork was created or the item was added to a
     * DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateCreated
     *
     * @return static
     *
     * @see 
     */
    public function dateCreated($dateCreated)
    {
        return $this->setProperty('dateCreated', $dateCreated);
    }

    /**
     * The date on which the CreativeWork was most recently modified or when the
     * item's entry was modified within a DataFeed.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateModified
     *
     * @return static
     *
     * @see 
     */
    public function dateModified($dateModified)
    {
        return $this->setProperty('dateModified', $dateModified);
    }

    /**
     * Date of first broadcast/publication.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $datePublished
     *
     * @return static
     *
     * @see 
     */
    public function datePublished($datePublished)
    {
        return $this->setProperty('datePublished', $datePublished);
    }

    /**
     * A link to the page containing the comments of the CreativeWork.
     *
     * @param string|string[] $discussionUrl
     *
     * @return static
     *
     * @see 
     */
    public function discussionUrl($discussionUrl)
    {
        return $this->setProperty('discussionUrl', $discussionUrl);
    }

    /**
     * Specifies the Person who edited the CreativeWork.
     *
     * @param Person|Person[] $editor
     *
     * @return static
     *
     * @see 
     */
    public function editor($editor)
    {
        return $this->setProperty('editor', $editor);
    }

    /**
     * An alignment to an established educational framework.
     *
     * @param AlignmentObject|AlignmentObject[] $educationalAlignment
     *
     * @return static
     *
     * @see 
     */
    public function educationalAlignment($educationalAlignment)
    {
        return $this->setProperty('educationalAlignment', $educationalAlignment);
    }

    /**
     * The purpose of a work in the context of education; for example,
     * 'assignment', 'group work'.
     *
     * @param string|string[] $educationalUse
     *
     * @return static
     *
     * @see 
     */
    public function educationalUse($educationalUse)
    {
        return $this->setProperty('educationalUse', $educationalUse);
    }

    /**
     * A media object that encodes this CreativeWork. This property is a synonym
     * for associatedMedia.
     *
     * @param MediaObject|MediaObject[] $encoding
     *
     * @return static
     *
     * @see 
     */
    public function encoding($encoding)
    {
        return $this->setProperty('encoding', $encoding);
    }

    /**
     * A media object that encodes this CreativeWork.
     *
     * @param MediaObject|MediaObject[] $encodings
     *
     * @return static
     *
     * @see 
     */
    public function encodings($encodings)
    {
        return $this->setProperty('encodings', $encodings);
    }

    /**
     * A creative work that this work is an
     * example/instance/realization/derivation of.
     *
     * @param CreativeWork|CreativeWork[] $exampleOfWork
     *
     * @return static
     *
     * @see 
     */
    public function exampleOfWork($exampleOfWork)
    {
        return $this->setProperty('exampleOfWork', $exampleOfWork);
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
     * @param string|string[] $fileFormat
     *
     * @return static
     *
     * @see 
     */
    public function fileFormat($fileFormat)
    {
        return $this->setProperty('fileFormat', $fileFormat);
    }

    /**
     * A person or organization that supports (sponsors) something through some
     * kind of financial contribution.
     *
     * @param Organization|Organization[]|Person|Person[] $funder
     *
     * @return static
     *
     * @see 
     */
    public function funder($funder)
    {
        return $this->setProperty('funder', $funder);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string|string[] $genre
     *
     * @return static
     *
     * @see 
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * Indicates a CreativeWork that is (in some sense) a part of this
     * CreativeWork.
     *
     * @param CreativeWork|CreativeWork[] $hasPart
     *
     * @return static
     *
     * @see 
     */
    public function hasPart($hasPart)
    {
        return $this->setProperty('hasPart', $hasPart);
    }

    /**
     * Headline of the article.
     *
     * @param string|string[] $headline
     *
     * @return static
     *
     * @see 
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
     * @param string|string[]|Language|Language[] $inLanguage
     *
     * @return static
     *
     * @see 
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * The number of interactions for the CreativeWork using the WebSite or
     * SoftwareApplication. The most specific child type of InteractionCounter
     * should be used.
     *
     * @param InteractionCounter|InteractionCounter[] $interactionStatistic
     *
     * @return static
     *
     * @see 
     */
    public function interactionStatistic($interactionStatistic)
    {
        return $this->setProperty('interactionStatistic', $interactionStatistic);
    }

    /**
     * The predominant mode of learning supported by the learning resource.
     * Acceptable values are 'active', 'expositive', or 'mixed'.
     *
     * @param string|string[] $interactivityType
     *
     * @return static
     *
     * @see 
     */
    public function interactivityType($interactivityType)
    {
        return $this->setProperty('interactivityType', $interactivityType);
    }

    /**
     * A flag to signal that the publication is accessible for free.
     *
     * @param bool|bool[] $isAccessibleForFree
     *
     * @return static
     *
     * @see 
     */
    public function isAccessibleForFree($isAccessibleForFree)
    {
        return $this->setProperty('isAccessibleForFree', $isAccessibleForFree);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param string|string[]|CreativeWork|CreativeWork[]|Product|Product[] $isBasedOn
     *
     * @return static
     *
     * @see 
     */
    public function isBasedOn($isBasedOn)
    {
        return $this->setProperty('isBasedOn', $isBasedOn);
    }

    /**
     * A resource that was used in the creation of this resource. This term can
     * be repeated for multiple sources. For example,
     * http://example.com/great-multiplication-intro.html.
     *
     * @param string|string[]|CreativeWork|CreativeWork[]|Product|Product[] $isBasedOnUrl
     *
     * @return static
     *
     * @see 
     */
    public function isBasedOnUrl($isBasedOnUrl)
    {
        return $this->setProperty('isBasedOnUrl', $isBasedOnUrl);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool|bool[] $isFamilyFriendly
     *
     * @return static
     *
     * @see 
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * Indicates a CreativeWork that this CreativeWork is (in some sense) part
     * of.
     *
     * @param CreativeWork|CreativeWork[] $isPartOf
     *
     * @return static
     *
     * @see 
     */
    public function isPartOf($isPartOf)
    {
        return $this->setProperty('isPartOf', $isPartOf);
    }

    /**
     * Keywords or tags used to describe this content. Multiple entries in a
     * keywords list are typically delimited by commas.
     *
     * @param string|string[] $keywords
     *
     * @return static
     *
     * @see 
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * The predominant type or kind characterizing the learning resource. For
     * example, 'presentation', 'handout'.
     *
     * @param string|string[] $learningResourceType
     *
     * @return static
     *
     * @see 
     */
    public function learningResourceType($learningResourceType)
    {
        return $this->setProperty('learningResourceType', $learningResourceType);
    }

    /**
     * A license document that applies to this content, typically indicated by
     * URL.
     *
     * @param CreativeWork|CreativeWork[]|string|string[] $license
     *
     * @return static
     *
     * @see 
     */
    public function license($license)
    {
        return $this->setProperty('license', $license);
    }

    /**
     * The location where the CreativeWork was created, which may not be the
     * same as the location depicted in the CreativeWork.
     *
     * @param Place|Place[] $locationCreated
     *
     * @return static
     *
     * @see 
     */
    public function locationCreated($locationCreated)
    {
        return $this->setProperty('locationCreated', $locationCreated);
    }

    /**
     * Indicates the primary entity described in some page or other
     * CreativeWork.
     *
     * @param Thing|Thing[] $mainEntity
     *
     * @return static
     *
     * @see 
     */
    public function mainEntity($mainEntity)
    {
        return $this->setProperty('mainEntity', $mainEntity);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param string|string[]|Product|Product[] $material
     *
     * @return static
     *
     * @see 
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * Indicates that the CreativeWork contains a reference to, but is not
     * necessarily about a concept.
     *
     * @param Thing|Thing[] $mentions
     *
     * @return static
     *
     * @see 
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
     * @param Offer|Offer[] $offers
     *
     * @return static
     *
     * @see 
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * The position of an item in a series or sequence of items.
     *
     * @param string|string[]|int|int[] $position
     *
     * @return static
     *
     * @see 
     */
    public function position($position)
    {
        return $this->setProperty('position', $position);
    }

    /**
     * The person or organization who produced the work (e.g. music album,
     * movie, tv/radio series etc.).
     *
     * @param Person|Person[]|Organization|Organization[] $producer
     *
     * @return static
     *
     * @see 
     */
    public function producer($producer)
    {
        return $this->setProperty('producer', $producer);
    }

    /**
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param Person|Person[]|Organization|Organization[] $provider
     *
     * @return static
     *
     * @see 
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * A publication event associated with the item.
     *
     * @param PublicationEvent|PublicationEvent[] $publication
     *
     * @return static
     *
     * @see 
     */
    public function publication($publication)
    {
        return $this->setProperty('publication', $publication);
    }

    /**
     * The publisher of the creative work.
     *
     * @param Organization|Organization[]|Person|Person[] $publisher
     *
     * @return static
     *
     * @see 
     */
    public function publisher($publisher)
    {
        return $this->setProperty('publisher', $publisher);
    }

    /**
     * Link to page describing the editorial principles of the organization
     * primarily responsible for the creation of the CreativeWork.
     *
     * @param string|string[] $publishingPrinciples
     *
     * @return static
     *
     * @see 
     */
    public function publishingPrinciples($publishingPrinciples)
    {
        return $this->setProperty('publishingPrinciples', $publishingPrinciples);
    }

    /**
     * The Event where the CreativeWork was recorded. The CreativeWork may
     * capture all or part of the event.
     *
     * @param Event|Event[] $recordedAt
     *
     * @return static
     *
     * @see 
     */
    public function recordedAt($recordedAt)
    {
        return $this->setProperty('recordedAt', $recordedAt);
    }

    /**
     * The place and time the release was issued, expressed as a
     * PublicationEvent.
     *
     * @param PublicationEvent|PublicationEvent[] $releasedEvent
     *
     * @return static
     *
     * @see 
     */
    public function releasedEvent($releasedEvent)
    {
        return $this->setProperty('releasedEvent', $releasedEvent);
    }

    /**
     * A review of the item.
     *
     * @param Review|Review[] $review
     *
     * @return static
     *
     * @see 
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param Review|Review[] $reviews
     *
     * @return static
     *
     * @see 
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * Indicates (by URL or string) a particular version of a schema used in
     * some CreativeWork. For example, a document could declare a schemaVersion
     * using an URL such as http://schema.org/version/2.0/ if precise indication
     * of schema version was required by some application.
     *
     * @param string|string[] $schemaVersion
     *
     * @return static
     *
     * @see 
     */
    public function schemaVersion($schemaVersion)
    {
        return $this->setProperty('schemaVersion', $schemaVersion);
    }

    /**
     * The Organization on whose behalf the creator was working.
     *
     * @param Organization|Organization[] $sourceOrganization
     *
     * @return static
     *
     * @see 
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
     * @param Place|Place[] $spatialCoverage
     *
     * @return static
     *
     * @see 
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
     * @param Organization|Organization[]|Person|Person[] $sponsor
     *
     * @return static
     *
     * @see 
     */
    public function sponsor($sponsor)
    {
        return $this->setProperty('sponsor', $sponsor);
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
     * @param \DateTimeInterface|\DateTimeInterface[]|string|string[] $temporalCoverage
     *
     * @return static
     *
     * @see 
     */
    public function temporalCoverage($temporalCoverage)
    {
        return $this->setProperty('temporalCoverage', $temporalCoverage);
    }

    /**
     * The textual content of this CreativeWork.
     *
     * @param string|string[] $text
     *
     * @return static
     *
     * @see 
     */
    public function text($text)
    {
        return $this->setProperty('text', $text);
    }

    /**
     * A thumbnail image relevant to the Thing.
     *
     * @param string|string[] $thumbnailUrl
     *
     * @return static
     *
     * @see 
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
     * @param Duration|Duration[] $timeRequired
     *
     * @return static
     *
     * @see 
     */
    public function timeRequired($timeRequired)
    {
        return $this->setProperty('timeRequired', $timeRequired);
    }

    /**
     * Organization or person who adapts a creative work to different languages,
     * regional differences and technical requirements of a target market, or
     * that translates during some event.
     *
     * @param Person|Person[]|Organization|Organization[] $translator
     *
     * @return static
     *
     * @see 
     */
    public function translator($translator)
    {
        return $this->setProperty('translator', $translator);
    }

    /**
     * The typical expected age range, e.g. '7-9', '11-'.
     *
     * @param string|string[] $typicalAgeRange
     *
     * @return static
     *
     * @see 
     */
    public function typicalAgeRange($typicalAgeRange)
    {
        return $this->setProperty('typicalAgeRange', $typicalAgeRange);
    }

    /**
     * The version of the CreativeWork embodied by a specified resource.
     *
     * @param float|float[]|int|int[]|string|string[] $version
     *
     * @return static
     *
     * @see 
     */
    public function version($version)
    {
        return $this->setProperty('version', $version);
    }

    /**
     * An embedded video object.
     *
     * @param VideoObject|VideoObject[] $video
     *
     * @return static
     *
     * @see 
     */
    public function video($video)
    {
        return $this->setProperty('video', $video);
    }

    /**
     * Example/instance/realization/derivation of the concept of this creative
     * work. eg. The paperback edition, first edition, or eBook.
     *
     * @param CreativeWork|CreativeWork[] $workExample
     *
     * @return static
     *
     * @see 
     */
    public function workExample($workExample)
    {
        return $this->setProperty('workExample', $workExample);
    }

}
