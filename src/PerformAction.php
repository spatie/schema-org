<?php

namespace Spatie\SchemaOrg;

/**
 * The act of participating in performance arts.
 *
 * @see http://schema.org/PerformAction
 */
class PerformAction extends PlayAction
{
    /**
     * A sub property of location. The entertainment business where the action
     * occurred.
     *
     * @param \Spatie\SchemaOrg\EntertainmentBusiness $entertainmentBusiness
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
