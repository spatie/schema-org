<?php

namespace Spatie\SchemaOrg;

/**
 * The act of searching for an object.
 * 
 * Related actions:
 * 
 * * [[FindAction]]: SearchAction generally leads to a FindAction, but not
 * necessarily.
 *
 * @see http://schema.org/SearchAction
 *
 * @mixin \Spatie\SchemaOrg\Action
 */
class SearchAction extends BaseType
{
    /**
     * A sub property of instrument. The query used on this action.
     *
     * @param string|string[] $query
     *
     * @return static
     *
     * @see http://schema.org/query
     */
    public function query($query)
    {
        return $this->setProperty('query', $query);
    }

}
