<?php

namespace Spatie\SchemaOrg;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @see http://schema.org/EndorseAction
 */
class EndorseAction extends ReactAction
{
    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @param \Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $endorsee
     *
     * @return static
     *
     * @see http://schema.org/endorsee
     */
    public function endorsee($endorsee)
    {
        return $this->setProperty('endorsee', $endorsee);
    }

}
