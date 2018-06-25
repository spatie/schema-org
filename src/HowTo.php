<?php

namespace Spatie\SchemaOrg;

/**
 * Instructions that explain how to achieve a result by performing a sequence of
 * steps.
 *
 * @see http://schema.org/HowTo
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class HowTo extends BaseType
{
    /**
     * The estimated cost of the supply or supplies consumed when performing
     * instructions.
     *
     * @param MonetaryAmount|MonetaryAmount[]|string|string[] $estimatedCost
     *
     * @return static
     *
     * @see http://schema.org/estimatedCost
     */
    public function estimatedCost($estimatedCost)
    {
        return $this->setProperty('estimatedCost', $estimatedCost);
    }

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $performTime
     *
     * @return static
     *
     * @see http://schema.org/performTime
     */
    public function performTime($performTime)
    {
        return $this->setProperty('performTime', $performTime);
    }

    /**
     * The length of time it takes to prepare the items to be used in
     * instructions or a direction, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $prepTime
     *
     * @return static
     *
     * @see http://schema.org/prepTime
     */
    public function prepTime($prepTime)
    {
        return $this->setProperty('prepTime', $prepTime);
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection.
     *
     * @param CreativeWork|CreativeWork[]|HowToSection|HowToSection[]|HowToStep|HowToStep[]|string|string[] $step
     *
     * @return static
     *
     * @see http://schema.org/step
     */
    public function step($step)
    {
        return $this->setProperty('step', $step);
    }

    /**
     * A single step item (as HowToStep, text, document, video, etc.) or a
     * HowToSection (originally misnamed 'steps'; 'step' is preferred).
     *
     * @param CreativeWork|CreativeWork[]|ItemList|ItemList[]|string|string[] $steps
     *
     * @return static
     *
     * @see http://schema.org/steps
     */
    public function steps($steps)
    {
        return $this->setProperty('steps', $steps);
    }

    /**
     * A sub-property of instrument. A supply consumed when performing
     * instructions or a direction.
     *
     * @param HowToSupply|HowToSupply[]|string|string[] $supply
     *
     * @return static
     *
     * @see http://schema.org/supply
     */
    public function supply($supply)
    {
        return $this->setProperty('supply', $supply);
    }

    /**
     * A sub property of instrument. An object used (but not consumed) when
     * performing instructions or a direction.
     *
     * @param HowToTool|HowToTool[]|string|string[] $tool
     *
     * @return static
     *
     * @see http://schema.org/tool
     */
    public function tool($tool)
    {
        return $this->setProperty('tool', $tool);
    }

    /**
     * The total time required to perform instructions or a direction (including
     * time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $totalTime
     *
     * @return static
     *
     * @see http://schema.org/totalTime
     */
    public function totalTime($totalTime)
    {
        return $this->setProperty('totalTime', $totalTime);
    }

    /**
     * The quantity that results by performing instructions. For example, a
     * paper airplane, 10 personalized candles.
     *
     * @param QuantitativeValue|QuantitativeValue[]|string|string[] $yield
     *
     * @return static
     *
     * @see http://schema.org/yield
     */
    public function yield($yield)
    {
        return $this->setProperty('yield', $yield);
    }

}
