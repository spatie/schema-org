<?php

namespace Spatie\SchemaOrg;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @see http://schema.org/EndorseAction
 *
 * @mixin \Spatie\SchemaOrg\ReactAction
 */
class EndorseAction extends BaseType
{
    /**
     * A sub property of participant. The person/organization being supported.
     *
     * @param Organization|Organization[]|Person|Person[] $endorsee
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
