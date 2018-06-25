<?php

namespace Spatie\SchemaOrg;

/**
 * A WebSite is a set of related web pages and other items typically served from
 * a single web domain and accessible via URLs.
 *
 * @see http://schema.org/WebSite
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class WebSite extends BaseType
{
    /**
     * The International Standard Serial Number (ISSN) that identifies this
     * serial publication. You can repeat this property to identify different
     * formats of, or the linking ISSN (ISSN-L) for, this serial publication.
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
