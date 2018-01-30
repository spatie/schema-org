<?php

namespace Spatie\SchemaOrg;

/**
 * The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
 *
 * @see 
 */
class VoteAction extends ChooseAction
{
    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @param Person|Person[] $candidate
     *
     * @return static
     *
     * @see 
     */
    public function candidate($candidate)
    {
        return $this->setProperty('candidate', $candidate);
    }

}
