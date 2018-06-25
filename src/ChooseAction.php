<?php

namespace Spatie\SchemaOrg;

/**
 * The act of expressing a preference from a set of options or a large or
 * unbounded set of choices/options.
 *
 * @see http://schema.org/ChooseAction
 *
 * @mixin \Spatie\SchemaOrg\AssessAction
 */
class ChooseAction extends BaseType
{
    /**
     * A sub property of object. The options subject to this action.
     *
     * @param Thing|Thing[]|string|string[] $actionOption
     *
     * @return static
     *
     * @see http://schema.org/actionOption
     */
    public function actionOption($actionOption)
    {
        return $this->setProperty('actionOption', $actionOption);
    }

    /**
     * A sub property of object. The options subject to this action.
     *
     * @param Thing|Thing[]|string|string[] $option
     *
     * @return static
     *
     * @see http://schema.org/option
     */
    public function option($option)
    {
        return $this->setProperty('option', $option);
    }

}
