<?php

namespace Spatie\SchemaOrg;

use \Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract;

/**
 * EnergyConsumptionDetails represents information related to the energy
 * efficiency of a product that consumes energy. The information that can be
 * provided is based on international regulations such as for example <a
 * href="https://eur-lex.europa.eu/eli/reg/2017/1369/oj">EU directive
 * 2017/1369</a> for energy labeling and the [Energy labeling
 * rule](https://www.ftc.gov/enforcement/rules/rulemaking-regulatory-reform-proceedings/energy-water-use-labeling-consumer)
 * under the Energy Policy and Conservation Act (EPCA) in the US
 *
 * @see https://schema.org/EnergyConsumptionDetails
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2670
 *
 */
class EnergyConsumptionDetails extends BaseType implements EnergyConsumptionDetailsContract
{
    /**
     * Specifies the most energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For
     * example, energy consumption for televisions placed on the market after
     * January 1, 2020 is scaled from D to A+++.
     *
     * @param \Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract[] $energyEfficiencyScaleMax
     *
     * @return static
     *
     * @see https://schema.org/energyEfficiencyScaleMax
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function energyEfficiencyScaleMax($energyEfficiencyScaleMax)
    {
        return $this->setProperty('energyEfficiencyScaleMax', $energyEfficiencyScaleMax);
    }

    /**
     * Specifies the least energy efficient class on the regulated EU energy
     * consumption scale for the product category a product belongs to. For
     * example, energy consumption for televisions placed on the market after
     * January 1, 2020 is scaled from D to A+++.
     *
     * @param \Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EUEnergyEfficiencyEnumerationContract[] $energyEfficiencyScaleMin
     *
     * @return static
     *
     * @see https://schema.org/energyEfficiencyScaleMin
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function energyEfficiencyScaleMin($energyEfficiencyScaleMin)
    {
        return $this->setProperty('energyEfficiencyScaleMin', $energyEfficiencyScaleMin);
    }

    /**
     * Defines the energy efficiency Category (which could be either a rating
     * out of range of values or a yes/no certification) for a product according
     * to an international energy efficiency standard
     *
     * @param \Spatie\SchemaOrg\Contracts\EnergyEfficiencyEnumerationContract|\Spatie\SchemaOrg\Contracts\EnergyEfficiencyEnumerationContract[] $hasEnergyEfficiencyCategory
     *
     * @return static
     *
     * @see https://schema.org/hasEnergyEfficiencyCategory
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory)
    {
        return $this->setProperty('hasEnergyEfficiencyCategory', $hasEnergyEfficiencyCategory);
    }

}
