<?php

namespace Spatie\SchemaOrg;

/**
 * The act of achieving victory in a competitive activity.
 *
 * @see http://schema.org/WinAction
 *
 * @mixin AchieveAction
 */
class WinAction
{
    /**
     * A sub property of participant. The loser of the action.
     *
     * @param Person|Person[] $loser
     *
     * @return static
     *
     * @see http://schema.org/loser
     */
    public function loser($loser)
    {
        return $this->setProperty('loser', $loser);
    }

}
