<?php

namespace Spatie\SchemaOrg;

/**
 * The act of being defeated in a competitive activity.
 *
 * @see http://schema.org/LoseAction
 */
class LoseAction extends AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     *
     * @param \Spatie\SchemaOrg\Person $winner
     *
     * @return static
     *
     * @see http://schema.org/winner
     */
    public function winner($winner)
    {
        return $this->setProperty('winner', $winner);
    }

}
