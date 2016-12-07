<?php

namespace Spatie\SchemaOrg;

/**
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see http://schema.org/EmployeeRole
 */
class EmployeeRole extends OrganizationRole
{
    /**
     * The base salary of the job or of an employee in an EmployeeRole.
     *
     * @param float|int|\Spatie\SchemaOrg\PriceSpecification|\Spatie\SchemaOrg\MonetaryAmount $baseSalary
     *
     * @return static
     *
     * @see http://schema.org/baseSalary
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
     * @param string $salaryCurrency
     *
     * @return static
     *
     * @see http://schema.org/salaryCurrency
     */
    public function salaryCurrency($salaryCurrency)
    {
        return $this->setProperty('salaryCurrency', $salaryCurrency);
    }

}
