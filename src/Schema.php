<?php

namespace Spatie\SchemaOrg;

class Schema
{
    public static function administrativeArea(): AdministrativeArea
    {
        return new AdministrativeArea();
    }

    public static function country(): Country
    {
        return new Country();
    }

    public static function localBusiness(): LocalBusiness
    {
        return new LocalBusiness();
    }

    public static function organization(): Organization
    {
        return new Organization();
    }

    public static function place(): Place
    {
        return new Place();
    }

    public static function postalAddress(): PostalAddress
    {
        return new PostalAddress();
    }

    public static function thing(): Thing
    {
        return new Thing();
    }
}
