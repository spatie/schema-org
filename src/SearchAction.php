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
 * @see 
 */
class SearchAction extends Action
{
    /**
     * A sub property of instrument. The query used on this action.
     *
     * @param string|string[] $query
     *
     * @return static
     *
     * @see 
     */
    public function query($query)
    {
        return $this->setProperty('query', $query);
    }

}
