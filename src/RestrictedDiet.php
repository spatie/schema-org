<?php

namespace Spatie\SchemaOrg;

/**
 * A diet restricted to certain foods or preparations for cultural, religious,
 * health or lifestyle reasons.
 *
 * @see http://schema.org/RestrictedDiet
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class RestrictedDiet extends BaseType
{
    /**
     * A diet appropriate for people with diabetes.
     *
     * @see http://schema.org/DiabeticDiet
     */
     const DiabeticDiet = 'http://schema.org/DiabeticDiet';

    /**
     * A diet exclusive of gluten.
     *
     * @see http://schema.org/GlutenFreeDiet
     */
     const GlutenFreeDiet = 'http://schema.org/GlutenFreeDiet';

    /**
     * A diet conforming to Islamic dietary practices.
     *
     * @see http://schema.org/HalalDiet
     */
     const HalalDiet = 'http://schema.org/HalalDiet';

    /**
     * A diet conforming to Hindu dietary practices, in particular, beef-free.
     *
     * @see http://schema.org/HinduDiet
     */
     const HinduDiet = 'http://schema.org/HinduDiet';

    /**
     * A diet conforming to Jewish dietary practices.
     *
     * @see http://schema.org/KosherDiet
     */
     const KosherDiet = 'http://schema.org/KosherDiet';

    /**
     * A diet focused on reduced calorie intake.
     *
     * @see http://schema.org/LowCalorieDiet
     */
     const LowCalorieDiet = 'http://schema.org/LowCalorieDiet';

    /**
     * A diet focused on reduced fat and cholesterol intake.
     *
     * @see http://schema.org/LowFatDiet
     */
     const LowFatDiet = 'http://schema.org/LowFatDiet';

    /**
     * A diet appropriate for people with lactose intolerance.
     *
     * @see http://schema.org/LowLactoseDiet
     */
     const LowLactoseDiet = 'http://schema.org/LowLactoseDiet';

    /**
     * A diet focused on reduced sodium intake.
     *
     * @see http://schema.org/LowSaltDiet
     */
     const LowSaltDiet = 'http://schema.org/LowSaltDiet';

    /**
     * A diet exclusive of all animal products.
     *
     * @see http://schema.org/VeganDiet
     */
     const VeganDiet = 'http://schema.org/VeganDiet';

    /**
     * A diet exclusive of animal meat.
     *
     * @see http://schema.org/VegetarianDiet
     */
     const VegetarianDiet = 'http://schema.org/VegetarianDiet';

}
