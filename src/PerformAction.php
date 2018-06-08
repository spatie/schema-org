<?php

namespace Spatie\SchemaOrg;

/**
 * The act of participating in performance arts.
 *
 * @see http://schema.org/PerformAction
 *
 * @mixin \Spatie\SchemaOrg\PlayAction
 */
class PerformAction extends BaseType
{
    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     *
     * @param EntertainmentBusiness|EntertainmentBusiness[] $entertainmentBusiness
     *
     * @return static
     *
     * @see http://schema.org/entertainmentBusiness
     */
    public function entertainmentBusiness($entertainmentBusiness)
    {
        return $this->setProperty('entertainmentBusiness', $entertainmentBusiness);
    }

}
