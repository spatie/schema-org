<?php

namespace Spatie\SchemaOrg;

/**
 * A recipe. For dietary restrictions covered by the recipe, a few common
 * restrictions are enumerated via [[suitableForDiet]]. The [[keywords]]
 * property can also be used to add more detail.
 *
 * @see 
 */
class Recipe extends CreativeWork
{
    /**
     * The time it takes to actually cook the dish, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $cookTime
     *
     * @return static
     *
     * @see 
     */
    public function cookTime($cookTime)
    {
        return $this->setProperty('cookTime', $cookTime);
    }

    /**
     * The method of cooking, such as Frying, Steaming, ...
     *
     * @param string|string[] $cookingMethod
     *
     * @return static
     *
     * @see 
     */
    public function cookingMethod($cookingMethod)
    {
        return $this->setProperty('cookingMethod', $cookingMethod);
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param string|string[] $ingredients
     *
     * @return static
     *
     * @see 
     */
    public function ingredients($ingredients)
    {
        return $this->setProperty('ingredients', $ingredients);
    }

    /**
     * Nutrition information about the recipe or menu item.
     *
     * @param NutritionInformation|NutritionInformation[] $nutrition
     *
     * @return static
     *
     * @see 
     */
    public function nutrition($nutrition)
    {
        return $this->setProperty('nutrition', $nutrition);
    }

    /**
     * The length of time it takes to prepare the recipe, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $prepTime
     *
     * @return static
     *
     * @see 
     */
    public function prepTime($prepTime)
    {
        return $this->setProperty('prepTime', $prepTime);
    }

    /**
     * The category of the recipe—for example, appetizer, entree, etc.
     *
     * @param string|string[] $recipeCategory
     *
     * @return static
     *
     * @see 
     */
    public function recipeCategory($recipeCategory)
    {
        return $this->setProperty('recipeCategory', $recipeCategory);
    }

    /**
     * The cuisine of the recipe (for example, French or Ethiopian).
     *
     * @param string|string[] $recipeCuisine
     *
     * @return static
     *
     * @see 
     */
    public function recipeCuisine($recipeCuisine)
    {
        return $this->setProperty('recipeCuisine', $recipeCuisine);
    }

    /**
     * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
     *
     * @param string|string[] $recipeIngredient
     *
     * @return static
     *
     * @see 
     */
    public function recipeIngredient($recipeIngredient)
    {
        return $this->setProperty('recipeIngredient', $recipeIngredient);
    }

    /**
     * A step or instruction involved in making the recipe.
     *
     * @param schema:ItemList|schema:ItemList[]|string|string[] $recipeInstructions
     *
     * @return static
     *
     * @see 
     */
    public function recipeInstructions($recipeInstructions)
    {
        return $this->setProperty('recipeInstructions', $recipeInstructions);
    }

    /**
     * The quantity produced by the recipe (for example, number of people
     * served, number of servings, etc).
     *
     * @param string|string[] $recipeYield
     *
     * @return static
     *
     * @see 
     */
    public function recipeYield($recipeYield)
    {
        return $this->setProperty('recipeYield', $recipeYield);
    }

    /**
     * Indicates a dietary restriction or guideline for which this recipe or
     * menu item is suitable, e.g. diabetic, halal etc.
     *
     * @param RestrictedDiet|RestrictedDiet[] $suitableForDiet
     *
     * @return static
     *
     * @see 
     */
    public function suitableForDiet($suitableForDiet)
    {
        return $this->setProperty('suitableForDiet', $suitableForDiet);
    }

    /**
     * The total time it takes to prepare and cook the recipe, in [ISO 8601
     * duration format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $totalTime
     *
     * @return static
     *
     * @see 
     */
    public function totalTime($totalTime)
    {
        return $this->setProperty('totalTime', $totalTime);
    }

}
