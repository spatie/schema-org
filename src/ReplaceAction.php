<?php

namespace Spatie\SchemaOrg;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see http://schema.org/ReplaceAction
 *
 * @mixin \Spatie\SchemaOrg\UpdateAction
 */
class ReplaceAction extends BaseType
{
    /**
     * A sub property of object. The object that is being replaced.
     *
     * @param Thing|Thing[] $replacee
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
     * @param Thing|Thing[] $replacer
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
