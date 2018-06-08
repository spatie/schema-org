<?php

namespace Spatie\SchemaOrg;

/**
 * Nutritional information about the recipe.
 *
 * @see http://schema.org/NutritionInformation
 *
 * @mixin \Spatie\SchemaOrg\StructuredValue
 */
class NutritionInformation extends BaseType
{
    /**
     * The number of calories.
     *
     * @param Energy|Energy[] $calories
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
     * @param Mass|Mass[] $carbohydrateContent
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
     * @param Mass|Mass[] $cholesterolContent
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
     * The number of grams of fat.
     *
     * @param Mass|Mass[] $fatContent
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
     * The number of grams of fiber.
     *
     * @param Mass|Mass[] $fiberContent
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
     * @param Mass|Mass[] $proteinContent
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
     * @param Mass|Mass[] $saturatedFatContent
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
     * @param string|string[] $servingSize
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
     * @param Mass|Mass[] $sodiumContent
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
     * @param Mass|Mass[] $sugarContent
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
     * The number of grams of trans fat.
     *
     * @param Mass|Mass[] $transFatContent
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
     * @param Mass|Mass[] $unsaturatedFatContent
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
