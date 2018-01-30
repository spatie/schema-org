<?php

namespace Spatie\SchemaOrg;

/**
 * The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
 *
 * @see 
 */
class ChooseAction extends AssessAction
{
    /**
     * A sub property of object. The options subject to this action.
     *
     * @param string|string[]|Thing|Thing[] $actionOption
     *
     * @return static
     *
     * @see 
     */
    public function actionOption($actionOption)
    {
        return $this->setProperty('actionOption', $actionOption);
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     * @param string|string[]|Thing|Thing[] $option
     *
     * @return static
     *
     * @see 
     */
    public function option($option)
    {
        return $this->setProperty('option', $option);
    }

}
