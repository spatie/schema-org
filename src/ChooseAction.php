<?php

namespace Spatie\SchemaOrg;

/**
 * The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
 *
 * @see http://schema.org/ChooseAction
 */
class ChooseAction extends AssessAction
{
    /**
     * A sub property of object. The options subject to this action.
     *
     * @param string|\Spatie\SchemaOrg\Thing $option
     *
     * @return static
     *
     * @see http://schema.org/option
     */
    public function option($option)
    {
        return $this->setProperty('option', $option);
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     * @param string|\Spatie\SchemaOrg\Thing $actionOption
     *
     * @return static
     *
     * @see http://schema.org/actionOption
     */
    public function actionOption($actionOption)
    {
        return $this->setProperty('actionOption', $actionOption);
    }

}
