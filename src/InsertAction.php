<?php

namespace Spatie\SchemaOrg;

/**
 * The act of adding at a specific location in an ordered collection.
 *
 * @see http://schema.org/InsertAction
 */
class InsertAction extends AddAction
{
    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @param \Spatie\SchemaOrg\Place $toLocation
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
