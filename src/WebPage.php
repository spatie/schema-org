<?php

namespace Spatie\SchemaOrg;

/**
 * A web page. Every web page is implicitly assumed to be declared to be of type
 * WebPage, so the various properties about that webpage, such as
 * <code>breadcrumb</code> may be used. We recommend explicit declaration if
 * these properties are specified, but if they are found outside of an
 * itemscope, they will be assumed to be about the page.
 *
 * @see 
 */
class WebPage extends CreativeWork
{
    /**
     * A set of links that can help a user understand and navigate a website
     * hierarchy.
     *
     * @param string|string[]|BreadcrumbList|BreadcrumbList[] $breadcrumb
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
     */
    public function reviewedBy($reviewedBy)
    {
        return $this->setProperty('reviewedBy', $reviewedBy);
    }

    /**
     * The most significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     *
     * @param string|string[] $significantLinks
     *
     * @return static
     *
     * @see 
     */
    public function significantLinks($significantLinks)
    {
        return $this->setProperty('significantLinks', $significantLinks);
    }

    /**
     * One of the more significant URLs on the page. Typically, these are the
     * non-navigation links that are clicked on the most.
     *
     * @param string|string[] $significantLink
     *
     * @return static
     *
     * @see 
     */
    public function significantLink($significantLink)
    {
        return $this->setProperty('significantLink', $significantLink);
    }

    /**
     * One of the domain specialities to which this web page's content applies.
     *
     * @param Specialty|Specialty[] $specialty
     *
     * @return static
     *
     * @see 
     */
    public function specialty($specialty)
    {
        return $this->setProperty('specialty', $specialty);
    }

}
