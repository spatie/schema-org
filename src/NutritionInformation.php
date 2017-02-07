<?php

namespace Spatie\SchemaOrg;

/**
 * Nutritional information about the recipe.
 *
 * @see http://schema.org/NutritionInformation
 */
class NutritionInformation extends StructuredValue
{
    /**
     * The number of calories.
     *
     * @param \Spatie\SchemaOrg\Energy $calories
     *
     * @return static
     *
     * @see http://schema.org/calories
     */
    public function calories($calories)
    {
        return $this->setProperty('calories', $calories);
    }

    /**
     * The number of grams of carbohydrates.
     *
     * @param \Spatie\SchemaOrg\Mass $carbohydrateContent
     *
     * @return static
     *
     * @see http://schema.org/carbohydrateContent
     */
    public function carbohydrateContent($carbohydrateContent)
    {
        return $this->setProperty('carbohydrateContent', $carbohydrateContent);
    }

    /**
     * The number of milligrams of cholesterol.
     *
     * @param \Spatie\SchemaOrg\Mass $cholesterolContent
     *
     * @return static
     *
     * @see http://schema.org/cholesterolContent
     */
    public function cholesterolContent($cholesterolContent)
    {
        return $this->setProperty('cholesterolContent', $cholesterolContent);
    }

    /**
     * The number of grams of fiber.
     *
     * @param \Spatie\SchemaOrg\Mass $fiberContent
     *
     * @return static
     *
     * @see http://schema.org/fiberContent
     */
    public function fiberContent($fiberContent)
    {
        return $this->setProperty('fiberContent', $fiberContent);
    }

    /**
     * The number of grams of protein.
     *
     * @param \Spatie\SchemaOrg\Mass $proteinContent
     *
     * @return static
     *
     * @see http://schema.org/proteinContent
     */
    public function proteinContent($proteinContent)
    {
        return $this->setProperty('proteinContent', $proteinContent);
    }

    /**
     * The number of grams of saturated fat.
     *
     * @param \Spatie\SchemaOrg\Mass $saturatedFatContent
     *
     * @return static
     *
     * @see http://schema.org/saturatedFatContent
     */
    public function saturatedFatContent($saturatedFatContent)
    {
        return $this->setProperty('saturatedFatContent', $saturatedFatContent);
    }

    /**
     * The serving size, in terms of the number of volume or mass.
     *
     * @param string $servingSize
     *
     * @return static
     *
     * @see http://schema.org/servingSize
     */
    public function servingSize($servingSize)
    {
        return $this->setProperty('servingSize', $servingSize);
    }

    /**
     * The number of milligrams of sodium.
     *
     * @param \Spatie\SchemaOrg\Mass $sodiumContent
     *
     * @return static
     *
     * @see http://schema.org/sodiumContent
     */
    public function sodiumContent($sodiumContent)
    {
        return $this->setProperty('sodiumContent', $sodiumContent);
    }

    /**
     * The number of grams of sugar.
     *
     * @param \Spatie\SchemaOrg\Mass $sugarContent
     *
     * @return static
     *
     * @see http://schema.org/sugarContent
     */
    public function sugarContent($sugarContent)
    {
        return $this->setProperty('sugarContent', $sugarContent);
    }

    /**
     * The number of grams of fat.
     *
     * @param \Spatie\SchemaOrg\Mass $fatContent
     *
     * @return static
     *
     * @see http://schema.org/fatContent
     */
    public function fatContent($fatContent)
    {
        return $this->setProperty('fatContent', $fatContent);
    }

    /**
     * The number of grams of trans fat.
     *
     * @param \Spatie\SchemaOrg\Mass $transFatContent
     *
     * @return static
     *
     * @see http://schema.org/transFatContent
     */
    public function transFatContent($transFatContent)
    {
        return $this->setProperty('transFatContent', $transFatContent);
    }

    /**
     * The number of grams of unsaturated fat.
     *
     * @param \Spatie\SchemaOrg\Mass $unsaturatedFatContent
     *
     * @return static
     *
     * @see http://schema.org/unsaturatedFatContent
     */
    public function unsaturatedFatContent($unsaturatedFatContent)
    {
        return $this->setProperty('unsaturatedFatContent', $unsaturatedFatContent);
    }

}
