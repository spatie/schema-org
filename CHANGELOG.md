# Changelog

All Notable changes to `schema-org` will be documented in this file.

# 1.3.1 - 2017-09-26
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
