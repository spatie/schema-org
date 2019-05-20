<?php

namespace Spatie\SchemaOrg;

/**
 * A web page. Every web page is implicitly assumed to be declared to be of type
 * WebPage, so the various properties about that webpage, such as
 * <code>breadcrumb</code> may be used. We recommend explicit declaration if
 * these properties are specified, but if they are found outside of an
 * itemscope, they will be assumed to be about the page.
 *
 * @see http://schema.org/WebPage
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class WebPage extends BaseType
{
    /**
     * A set of links that can help a user understand and navigate a website
     * hierarchy.
     *
     * @param BreadcrumbList|BreadcrumbList[]|string|string[] $breadcrumb
     *
     * @return static
     *
     * @see http://schema.org/breadcrumb
     */
    public function breadcrumb($breadcrumb)
    {
        return $this->setProperty('breadcrumb', $breadcrumb);
    }

    /**
     * Date on which the content on this web page was last reviewed for accuracy
     * and/or completeness.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $lastReviewed
     *
     * @return static
     *
     * @see http://schema.org/lastReviewed
     */
    public function lastReviewed($lastReviewed)
    {
        return $this->setProperty('lastReviewed', $lastReviewed);
    }

    /**
     * Indicates if this web page element is the main subject of the page.
     *
     * @param WebPageElement|WebPageElement[] $mainContentOfPage
     *
     * @return static
     *
     * @see http://schema.org/mainContentOfPage
     */
    public function mainContentOfPage($mainContentOfPage)
    {
        return $this->setProperty('mainContentOfPage', $mainContentOfPage);
    }

    /**
     * Indicates the main image on the page.
     *
     * @param ImageObject|ImageObject[] $primaryImageOfPage
     *
     * @return static
     *
     * @see http://schema.org/primaryImageOfPage
     */
    public function primaryImageOfPage($primaryImageOfPage)
    {
        return $this->setProperty('primaryImageOfPage', $primaryImageOfPage);
    }

    /**
     * A link related to this web page, for example to other related web pages.
     *
     * @param string|string[] $relatedLink
     *
     * @return static
     *
     * @see http://schema.org/relatedLink
     */
    public function relatedLink($relatedLink)
    {
        return $this->setProperty('relatedLink', $relatedLink);
    }

    /**
     * People or organizations that have reviewed the content on this web page
     * for accuracy and/or completeness.
     *
     * @param Organization|Organization[]|Person|Person[] $reviewedBy
     *
     * @return static
     *
     * @see http://schema.org/reviewedBy
     */
    public function reviewedBy($reviewedBy)
    {
        return $this->setProperty('reviewedBy', $reviewedBy);
    }

    /**
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     *
     * @param string|string[] $significantLink
     *
     * @return static
     *
     * @see http://schema.org/significantLink
     */
    public function significantLink($significantLink)
    {
        return $this->setProperty('significantLink', $significantLink);
    }

    /**
     * The most significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     *
     * @param string|string[] $significantLinks
     *
     * @return static
     *
     * @see http://schema.org/significantLinks
     */
    public function significantLinks($significantLinks)
    {
        return $this->setProperty('significantLinks', $significantLinks);
    }

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the
     * sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully
     * spoken in particular circumstances; the 'speakable' property serves to
     * indicate the parts most likely to be generally useful for speech.
     * 
     * The *speakable* property can be repeated an arbitrary number of times,
     * with three kinds of possible 'content-locator' values:
     * 
     * 1.) *id-value* URL references - uses *id-value* of an element in the page
     * being annotated. The simplest use of *speakable* has (potentially
     * relative) URL values, referencing identified sections of the document
     * concerned.
     * 
     * 2.) CSS Selectors - addresses content in the annotated page, eg. via
     * class attribute. Use the [[cssSelector]] property.
     * 
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
     * content). Use the [[xpath]] property.
     * 
     * 
     * For more sophisticated markup of speakable sections beyond simple ID
     * references, either CSS selectors or XPath expressions to pick out
     * document section(s) as speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined
     * to be a possible value of the *speakable* property.
     *
     * @param SpeakableSpecification|SpeakableSpecification[]|string|string[] $speakable
     *
     * @return static
     *
     * @see http://schema.org/speakable
     */
    public function speakable($speakable)
    {
        return $this->setProperty('speakable', $speakable);
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @param Specialty|Specialty[] $specialty
     *
     * @return static
     *
     * @see http://schema.org/specialty
     */
    public function specialty($specialty)
    {
        return $this->setProperty('specialty', $specialty);
    }

}
