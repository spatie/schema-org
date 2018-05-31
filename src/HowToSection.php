<?php

namespace Spatie\SchemaOrg;

/**
 * A sub-grouping of steps in the instructions for how to achieve a result (e.g.
 * steps for making a pie crust within a pie recipe).
 *
 * @see http://schema.org/HowToSection
 */
class HowToSection extends ItemList
{
    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     * @param CreativeWork|CreativeWork[]|ItemList|ItemList[]|string|string[] $steps
     *
     * @return static
     *
     * @see http://schema.org/steps
     */
    public function steps($steps)
    {
        return $this->setProperty('steps', $steps);
    }

}
