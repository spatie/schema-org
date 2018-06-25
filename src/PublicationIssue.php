<?php

namespace Spatie\SchemaOrg;

/**
 * A part of a successively published publication such as a periodical or
 * publication volume, often numbered, usually containing a grouping of works
 * such as articles.
 * 
 * [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/PublicationIssue
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class PublicationIssue extends BaseType
{
    /**
     * Identifies the issue of publication; for example, "iii" or "2".
     *
     * @param int|int[]|string|string[] $issueNumber
     *
     * @return static
     *
     * @see http://schema.org/issueNumber
     */
    public function issueNumber($issueNumber)
    {
        return $this->setProperty('issueNumber', $issueNumber);
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @param int|int[]|string|string[] $pageEnd
     *
     * @return static
     *
     * @see http://schema.org/pageEnd
     */
    public function pageEnd($pageEnd)
    {
        return $this->setProperty('pageEnd', $pageEnd);
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @param int|int[]|string|string[] $pageStart
     *
     * @return static
     *
     * @see http://schema.org/pageStart
     */
    public function pageStart($pageStart)
    {
        return $this->setProperty('pageStart', $pageStart);
    }

    /**
     * Any description of pages that is not separated into pageStart and
     * pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @param string|string[] $pagination
     *
     * @return static
     *
     * @see http://schema.org/pagination
     */
    public function pagination($pagination)
    {
        return $this->setProperty('pagination', $pagination);
    }

}
