<?php

namespace Spatie\SchemaOrg;

/**
 * The act of expressing a preference from a fixed/finite/structured set of
 * choices/options.
 *
 * @see http://schema.org/VoteAction
 *
 * @mixin \Spatie\SchemaOrg\ChooseAction
 */
class VoteAction extends BaseType
{
    /**
     * A sub property of object. The candidate subject of this action.
     *
     * @param Person|Person[] $candidate
     *
     * @return static
     *
     * @see http://schema.org/candidate
     */
    public function candidate($candidate)
    {
        return $this->setProperty('candidate', $candidate);
    }

}
