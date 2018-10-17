# Changelog

All Notable changes to `schema-org` will be documented in this file.

## 2.0.3 - 2018-10-18
- Convert invalid objects that have a `__toString` method to strings

## 2.0.2 - 2018-06-25
- Fix previous release

## 2.0.1 - 2018-06-25
- Use `https` protocol for Schema.org links

## 2.0.0 - 2018-06-08
- Supports multiple type inheritance. Types no longer extend each other, they all are a direct extension of `BaseType`
- This release probably doesn't contain any breaking changes for most people. It breaks all type checks (e.g. `instanceof LocalBusiness`), but doesn't change the way types are generated

## 1.7.0 - 2018-06-08
- Regenerated types

## 1.6.0 - 2018-05-22
- Added: `Enumeration` child types with constants, e.g. `Spatie\Schema\DayOfWeek::Monday`.

## 1.5.0 - 2018-05-03
- Added: All types are now json serializable and have array access

## 1.4.2 - 2018-03-28
- Fixed: Date format in schemas is now ISO8601 (`DateTime::ATOM`)

# 1.4.1 - 2017-12-11
- Fixed: `@param` hints for numbers (`float|int`)

# 1.4.0 - 2017-09-26
- Added: `BaseType::addProperties` method to add multiple properties in one go
- Fixed: `@param` hints now also have array versions of the accepted data types, like `string|string[]`

# 1.3.0 - 2017-05-08
- Added: `__call` catches unknown methods and calls `setProperty` under the hood, using the method name as the property name and the first argument as property value
- Added (by updating generated types): `CreativeWork::accessMode`, `CreativeWork::accessModeSufficient`, `CreativeWork::accessibilitySummary`, `Event::audience`, `FoodEstablishment::hasMenu`
- Removed (by updating generated types, note that this isn't breaking because `__call` will catch your method calls): `Menu::menuAddOn`

# 1.2.1 - 2017-02-20
- Fixed: New lines are considered and no longer break docs
- Fixed: HTML line breaks are removed from the docs

# 1.2.0 - 2017-02-07
- Added: Objects that implements `DateTimeInterface` are now formatted to an ISO 8601 compliant string
- Fixed: Some properties were missing due to some whitespace parsing issues

# 1.1.0 - 2017-01-03
- Added: `if` function to conditionally modify the schema

# 1.0.1 - 2017-01-03
- Fixed: Arrays of properties are now correctly serialized when converted to ld+json

## 1.0.0 - 2016-12-06
- Initial release
