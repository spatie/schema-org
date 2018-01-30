<?php

namespace Spatie\SchemaOrg;

/**
 * The act of transferring/moving (abstract or concrete) animate or inanimate
 * objects from one place to another.
 *
 * @see 
 */
class TransferAction extends Action
{
    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     *
     * @param Place|Place[] $fromLocation
     *
     * @return static
     *
     * @see 
     */
    public function fromLocation($fromLocation)
    {
        return $this->setProperty('fromLocation', $fromLocation);
    }

    /**
     * A sub property of location. The final location of the object or the agent
     * after the action.
     *
     * @param Place|Place[] $toLocation
     *
     * @return static
     *
     * @see 
     */
    public function toLocation($toLocation)
    {
        return $this->setProperty('toLocation', $toLocation);
    }

}
