<?php

namespace Spatie\SchemaOrg;

/**
 * The act of participating in performance arts.
 *
 * @see 
 */
class PerformAction extends PlayAction
{
    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     *
     * @param EntertainmentBusiness|EntertainmentBusiness[] $entertainmentBusiness
     *
     * @return static
     *
     * @see 
     */
    public function entertainmentBusiness($entertainmentBusiness)
    {
        return $this->setProperty('entertainmentBusiness', $entertainmentBusiness);
    }

}
