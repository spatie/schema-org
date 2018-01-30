<?php

namespace Spatie\SchemaOrg;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @see 
 */
class EndorseAction extends ReactAction
{
    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @param Organization|Organization[]|Person|Person[] $endorsee
     *
     * @return static
     *
     * @see 
     */
    public function endorsee($endorsee)
    {
        return $this->setProperty('endorsee', $endorsee);
    }

}
