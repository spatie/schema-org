<?php

namespace Spatie\SchemaOrg;

/**
 * A publication in any medium issued in successive parts bearing numerical or
 * chronological designations and intended, such as a magazine, scholarly
 * journal, or newspaper to continue indefinitely.
 * 
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/Periodical
 *
 * @mixin CreativeWorkSeries
 */
class Periodical extends BaseType
{
    /**
     * The International Standard Serial Number (ISSN) that identifies this
     * periodical. You can repeat this property to (for example) identify
     * different formats of this periodical.
     *
     * @param string|string[] $issn
     *
     * @return static
     *
     * @see http://schema.org/issn
     */
    public function issn($issn)
    {
        return $this->setProperty('issn', $issn);
    }

}
