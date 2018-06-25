<?php

namespace Spatie\SchemaOrg;

/**
 * The act of adding at a specific location in an ordered collection.
 *
 * @see http://schema.org/InsertAction
 *
 * @mixin \Spatie\SchemaOrg\AddAction
 */
class InsertAction extends BaseType
{
    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @param Place|Place[] $toLocation
     *
     * @return static
     *
     * @see http://schema.org/toLocation
     */
    public function toLocation($toLocation)
    {
        return $this->setProperty('toLocation', $toLocation);
    }

}
