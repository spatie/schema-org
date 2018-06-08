<?php

namespace Spatie\SchemaOrg;

/**
 * The day of the week, e.g. used to specify to which day the opening hours of
 * an OpeningHoursSpecification refer.
 * 
 * Originally, URLs from [GoodRelations](http://purl.org/goodrelations/v1) were
 * used (for [[Monday]], [[Tuesday]], [[Wednesday]], [[Thursday]], [[Friday]],
 * [[Saturday]], [[Sunday]] plus a special entry for [[PublicHolidays]]); these
 * have now been integrated directly into schema.org.
 *
 * @see http://schema.org/DayOfWeek
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class DayOfWeek extends BaseType
{
    /**
     * The day of the week between Thursday and Saturday.
     *
     * @see http://schema.org/Friday
     */
     const Friday = 'http://schema.org/Friday';

    /**
     * The day of the week between Sunday and Tuesday.
     *
     * @see http://schema.org/Monday
     */
     const Monday = 'http://schema.org/Monday';

    /**
     * This stands for any day that is a public holiday; it is a placeholder for
     * all official public holidays in some particular location. While not
     * technically a "day of the week", it can be used with
     * [[OpeningHoursSpecification]]. In the context of an opening hours
     * specification it can be used to indicate opening hours on public
     * holidays, overriding general opening hours for the day of the week on
     * which a public holiday occurs.
     *
     * @see http://schema.org/PublicHolidays
     */
     const PublicHolidays = 'http://schema.org/PublicHolidays';

    /**
     * The day of the week between Friday and Sunday.
     *
     * @see http://schema.org/Saturday
     */
     const Saturday = 'http://schema.org/Saturday';

    /**
     * The day of the week between Saturday and Monday.
     *
     * @see http://schema.org/Sunday
     */
     const Sunday = 'http://schema.org/Sunday';

    /**
     * The day of the week between Wednesday and Friday.
     *
     * @see http://schema.org/Thursday
     */
     const Thursday = 'http://schema.org/Thursday';

    /**
     * The day of the week between Monday and Wednesday.
     *
     * @see http://schema.org/Tuesday
     */
     const Tuesday = 'http://schema.org/Tuesday';

    /**
     * The day of the week between Tuesday and Thursday.
     *
     * @see http://schema.org/Wednesday
     */
     const Wednesday = 'http://schema.org/Wednesday';

}
