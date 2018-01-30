<?php

namespace Spatie\SchemaOrg;

/**
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see 
 */
class EmployeeRole extends OrganizationRole
{
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param float|float[]|int|int[]|PriceSpecification|PriceSpecification[]|MonetaryAmount|MonetaryAmount[] $baseSalary
     *
     * @return static
     *
     * @see 
     */
    public function baseSalary($baseSalary)
    {
        return $this->setProperty('baseSalary', $baseSalary);
    }

    /**
     * The currency (coded using [ISO
     * 4217](http://en.wikipedia.org/wiki/ISO_4217) ) used for the main salary
     * information in this job posting or for this employee.
     *
     * @param string|string[] $salaryCurrency
     *
     * @return static
     *
     * @see 
     */
    public function salaryCurrency($salaryCurrency)
    {
        return $this->setProperty('salaryCurrency', $salaryCurrency);
    }

}
