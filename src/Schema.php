<?php

namespace Spatie\SchemaOrg;

class Schema
{
    public static function localBusiness(): LocalBusiness
    {
        return new LocalBusiness();
    }

    public static function organization(): Organization
    {
        return new Organization();
    }

    public static function thing(): Thing
    {
        return new Thing();
    }
}
