<?php

namespace Spatie\SchemaOrg;

/**
 * The act of an agent relocating to a place.
 * 
 * Related actions:
 * 
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a
 * living Person or Organization rather than an inanimate object.
 *
 * @see http://schema.org/MoveAction
 *
 * @mixin \Spatie\SchemaOrg\Action
 */
class MoveAction extends BaseType
{
    /**
     * A sub property of location. The original location of the object or the
     * agent before the action.
     *
     * @param Place|Place[] $fromLocation
     *
     * @return static
     *
     * @see http://schema.org/fromLocation
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
     * @see http://schema.org/toLocation
     */
    public function toLocation($toLocation)
    {
        return $this->setProperty('toLocation', $toLocation);
    }

}
