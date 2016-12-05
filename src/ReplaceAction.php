<?php

namespace Spatie\SchemaOrg;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see http://schema.org/ReplaceAction
 */
class ReplaceAction extends UpdateAction
{
    /**
     * A sub property of object. The object that is being replaced.
     *
     * @param \Spatie\SchemaOrg\Thing $replacee
     *
     * @return static
     *
     * @see http://schema.org/replacee
     */
    public function replacee($replacee)
    {
        return $this->setProperty('replacee', $replacee);
    }

    /**
     * A sub property of object. The object that replaces.
     *
     * @param \Spatie\SchemaOrg\Thing $replacer
     *
     * @return static
     *
     * @see http://schema.org/replacer
     */
    public function replacer($replacer)
    {
        return $this->setProperty('replacer', $replacer);
    }

}
