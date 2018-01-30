<?php

namespace Spatie\SchemaOrg;

/**
 * The act of being defeated in a competitive activity.
 *
 * @see 
 */
class LoseAction extends AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     *
     * @param Person|Person[] $winner
     *
     * @return static
     *
     * @see 
     */
    public function winner($winner)
    {
        return $this->setProperty('winner', $winner);
    }

}
