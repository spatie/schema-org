<?php

namespace Spatie\SchemaOrg;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see 
 */
class ReplaceAction extends UpdateAction
{
    /**
     * A sub property of object. The object that is being replaced.
     *
     * @param Thing|Thing[] $replacee
     *
     * @return static
     *
     * @see 
     */
    public function replacee($replacee)
    {
        return $this->setProperty('replacee', $replacee);
    }

    /**
     * A sub property of object. The object that replaces.
     *
     * @param Thing|Thing[] $replacer
     *
     * @return static
     *
     * @see 
     */
    public function replacer($replacer)
    {
        return $this->setProperty('replacer', $replacer);
    }

}
