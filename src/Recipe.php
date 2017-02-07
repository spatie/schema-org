<?php

namespace Spatie\SchemaOrg;

/**
 * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via [[suitableForDiet]]. The [[keywords]]
 * property can also be used to add more detail.
 *
 * @see http://schema.org/Recipe
 */
class Recipe extends CreativeWork
{
    /**
     * Indicates a dietary restriction or guideline for which this recipe or
     * menu item is suitable, e.g. diabetic, halal etc.
     *
     * @param \Spatie\SchemaOrg\RestrictedDiet $suitableForDiet
     *
     * @return static
     *
     * @see http://schema.org/suitableForDiet
     */
    public function suitableForDiet($suitableForDiet)
    {
        return $this->setProperty('suitableForDiet', $suitableForDiet);
    }

    /**
     * The total time it takes to prepare and cook the recipe, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Duration $totalTime
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
     * The time it takes to actually cook the dish, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Duration $cookTime
     *
     * @return static
     *
     * @see http://schema.org/cookTime
     */
    public function cookTime($cookTime)
    {
        return $this->setProperty('cookTime', $cookTime);
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @param string $cookingMethod
     *
     * @return static
     *
     * @see http://schema.org/cookingMethod
     */
    public function cookingMethod($cookingMethod)
    {
        return $this->setProperty('cookingMethod', $cookingMethod);
    }

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @param \Spatie\SchemaOrg\NutritionInformation $nutrition
     *
     * @return static
     *
     * @see http://schema.org/nutrition
     */
    public function nutrition($nutrition)
    {
        return $this->setProperty('nutrition', $nutrition);
    }

    /**
     * The length of time it takes to prepare the recipe, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Duration $prepTime
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
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @param string $recipeCategory
     *
     * @return static
     *
     * @see http://schema.org/recipeCategory
     */
    public function recipeCategory($recipeCategory)
    {
        return $this->setProperty('recipeCategory', $recipeCategory);
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @param string $recipeCuisine
     *
     * @return static
     *
     * @see http://schema.org/recipeCuisine
     */
    public function recipeCuisine($recipeCuisine)
    {
        return $this->setProperty('recipeCuisine', $recipeCuisine);
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param string $ingredients
     *
     * @return static
     *
     * @see http://schema.org/ingredients
     */
    public function ingredients($ingredients)
    {
        return $this->setProperty('ingredients', $ingredients);
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param string $recipeIngredient
     *
     * @return static
     *
     * @see http://schema.org/recipeIngredient
     */
    public function recipeIngredient($recipeIngredient)
    {
        return $this->setProperty('recipeIngredient', $recipeIngredient);
    }

    /**
     * A step or instruction involved in making the recipe.
     *
     * @param \Spatie\SchemaOrg\schema:ItemList|string $recipeInstructions
     *
     * @return static
     *
     * @see http://schema.org/recipeInstructions
     */
    public function recipeInstructions($recipeInstructions)
    {
        return $this->setProperty('recipeInstructions', $recipeInstructions);
    }

    /**
     * The quantity produced by the recipe (for example, number of people
     * served, number of servings, etc).
     *
     * @param string $recipeYield
     *
     * @return static
     *
     * @see http://schema.org/recipeYield
     */
    public function recipeYield($recipeYield)
    {
        return $this->setProperty('recipeYield', $recipeYield);
    }

}
