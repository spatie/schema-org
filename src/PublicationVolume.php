<?php

namespace Spatie\SchemaOrg;

/**
 * A part of a successively published publication such as a periodical or
 * multi-volume work, often numbered. It may represent a time span, such as a
 * year.
 * 
 *       <br/><br/>See also <a
 * href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog
 * post</a>.
 *
 * @see http://schema.org/PublicationVolume
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class PublicationVolume extends BaseType
{
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

    /**
     * Identifies the volume of publication or multi-part work; for example,
     * "iii" or "2".
     *
     * @param int|int[]|string|string[] $volumeNumber
     *
     * @return static
     *
     * @see http://schema.org/volumeNumber
     */
    public function volumeNumber($volumeNumber)
    {
        return $this->setProperty('volumeNumber', $volumeNumber);
    }

}
