<?php

namespace Spatie\SchemaOrg;

/**
 * An enumeration of genders.
 *
 * @see http://schema.org/GenderType
 */
class GenderType extends Enumeration
{
    /**
     * The female gender.
     *
     * @see http://schema.org/Female
     */
     const Female = 'http://schema.org/Female';

    /**
     * The male gender.
     *
     * @see http://schema.org/Male
     */
     const Male = 'http://schema.org/Male';

}
