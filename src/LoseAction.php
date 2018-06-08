<?php

namespace Spatie\SchemaOrg;

/**
 * The act of being defeated in a competitive activity.
 *
 * @see http://schema.org/LoseAction
 *
 * @mixin \Spatie\SchemaOrg\AchieveAction
 */
class LoseAction extends BaseType
{
    /**
     * A sub property of participant. The winner of the action.
     *
     * @param Person|Person[] $winner
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
