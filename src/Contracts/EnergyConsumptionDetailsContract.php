<?php

namespace Spatie\SchemaOrg\Contracts;

interface EnergyConsumptionDetailsContract
{
    public function energyEfficiencyScaleMax($energyEfficiencyScaleMax);

    public function energyEfficiencyScaleMin($energyEfficiencyScaleMin);

    public function hasEnergyEfficiencyCategory($hasEnergyEfficiencyCategory);

}
