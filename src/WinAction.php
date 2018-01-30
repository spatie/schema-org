<?php

namespace Spatie\SchemaOrg;

/**
 * The act of achieving victory in a competitive activity.
 *
 * @see 
 */
class WinAction extends AchieveAction
{
    /**
     * A sub property of participant. The loser of the action.
     *
     * @param Person|Person[] $loser
     *
     * @return static
     *
     * @see 
     */
    public function loser($loser)
    {
        return $this->setProperty('loser', $loser);
    }

}
