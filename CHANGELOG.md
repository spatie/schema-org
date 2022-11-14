# Changelog

All Notable changes to `schema-org` will be documented in this file.

## 3.13.0 - 2022-11-14

### What's Changed

- add support for complex context by @Gummibeer in https://github.com/spatie/schema-org/pull/189

**Full Changelog**: https://github.com/spatie/schema-org/compare/3.12.0...3.13.0

## 3.12.0 - 2022-11-14

### What's Changed

- Update generator to use schema v15 by @osopolar in https://github.com/spatie/schema-org/pull/188

### New Contributors

- @osopolar made their first contribution in https://github.com/spatie/schema-org/pull/188

**Full Changelog**: https://github.com/spatie/schema-org/compare/3.11.0...3.12.0

## 3.11.0 - 2022-04-11

## What's Changed

- Rewrite tests to use pest instead of phpunit by @otsch in https://github.com/spatie/schema-org/pull/179
- upgrade to schema:v14 by @Gummibeer in https://github.com/spatie/schema-org/pull/181

## New Contributors

- @otsch made their first contribution in https://github.com/spatie/schema-org/pull/179

**Full Changelog**: https://github.com/spatie/schema-org/compare/3.10.0...3.11.0

## 3.10.0 - 2022-03-04

- Drop PHP 7.4 Support - [#174](https://github.com/spatie/schema-org/pull/174)
- Add PHP 8.1 Support - [#174](https://github.com/spatie/schema-org/pull/174)

## 3.10.0 - 2022-03-04

- Drop PHP 7.4 Support - [#174](https://github.com/spatie/schema-org/pull/174)
- Add PHP 8.1 Support - [#174](https://github.com/spatie/schema-org/pull/174)

## 3.9.0 - 2022-02-10

- Add support for Laravel 9 - [#176](https://github.com/spatie/schema-org/pull/176)

## 3.8.0 - 2021-10-20

- Upgrade to schema.org:v13.0 - [#167](https://github.com/spatie/schema-org/pull/167)

## 3.7.0 - 2021-10-06

- Upgrade to schema.org:v12.0 - [#170](https://github.com/spatie/schema-org/pull/170)

## 3.6.0 - 2021-10-06

- Upgrade to schema.org:v11.01 - [#169](https://github.com/spatie/schema-org/pull/169)

## 3.5.0 - 2021-10-05

- Upgrade to schema.org:v10 - [#166](https://github.com/spatie/schema-org/pull/166)
- Drop PHP 7.3 support - [#165](https://github.com/spatie/schema-org/pull/165)
- Add PHP 8.1 support - [#165](https://github.com/spatie/schema-org/pull/165)

## 3.4.0 - 2021-05-10

- Add custom `\Spatie\SchemaOrg\Graph` context support - [#160](https://github.com/spatie/schema-org/pull/160)

## 3.3.0 - 2021-01-02

- Fix `@id` and `identifier` serialization for typed identifiers - [#157](https://github.com/spatie/schema-org/pull/157)

## 3.2.1 - 2020-11-28

- Add PHP 8.0 support

## 3.2.0 - 2020-11-05

- Add `\Spatie\SchemaOrg\ReferencedType` to reference types in schemas and graphs - [#155](https://github.com/spatie/schema-org/pull/155)

## 3.1.1 - 2020-10-22

- Fix empty string property values - [#153](https://github.com/spatie/schema-org/pull/153)

## 3.1.0 - 2020-10-07

- Add Multi-Typed-Entity support `\Spatie\SchemaOrg\MultiTypedEntity` - [#148](https://github.com/spatie/schema-org/pull/148)

## 3.0.0 - 2020-08-27

- Upgrade to schema.org:v9 which includes all extensions

## 2.16.0 - 2020-08-27

- Upgrade to schema.org:v8

## 2.15.0 - 2020-08-27

Generated files with new JSON-LD source - some methods have been dropped which aren't part of the corresponding types but were listed in old RDFa - it's not a breaking release because of the same schema.org version and changes only because of schema file inconsistencies.

## 2.14.1 - 2020-06-10

- Fix `\BadMethodCallException` message thrown in `\Spatie\SchemaOrg\Graph`
- Fix `\Spatie\SchemaOrg\Graph` docblock `@method` annotations

## 2.14.0 - 2020-06-03

- Add identifiers to `\Spatie\SchemaOrg\Graph` nodes [#124](https://github.com/spatie/schema-org/pull/124)

## 2.13.0 - 2020-04-17

- RDFa update

## 2.12.1 - 2020-03-17

- Fix after malformed RDFa import [twitter.com/ScreamingDev](https://twitter.com/ScreamingDev/status/1239859471335243779)

## 2.12.0 - 2020-01-23

- RDFa update

## 2.11.1 - 2019-11-18

- Fix types to implement their own contract

## 2.11.0 - 2019-11-18

- Use contracts as type-hints in doc-blocks

## 2.10.0 - 2019-11-12

- Add PHP 7.4 support
- Fix `Graph` magic call
- RDFa update

## 2.9.0 - 2019-10-06

- Drop PHP 7.2 support

## 2.8.0 - 2019-10-06

- Drop PHP 7.1 support

## 2.7.0 - 2019-10-06

- Drop PHP 7.0 support

## 2.6.0 - 2019-09-26

- Fix identifier serialization

## 2.5.0 - 2019-09-25

- Add reflection support

## 2.4.0 - 2019-09-25

- RDFa update

## 2.3.0 - 2019-08-07

- Fix null values

## 2.2.1 - 2019-05-28

- Fix pending Types

## 2.2.0 - 2019-05-28

- RDFa update

## 2.1.0 - 2019-01-18

- Add `Graph` support

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

## 1.4.1 - 2017-12-11

- Fixed: `@param` hints for numbers (`float|int`)

## 1.4.0 - 2017-09-26

- Added: `BaseType::addProperties` method to add multiple properties in one go
- Fixed: `@param` hints now also have array versions of the accepted data types, like `string|string[]`

## 1.3.0 - 2017-05-08

- Added: `__call` catches unknown methods and calls `setProperty` under the hood, using the method name as the property name and the first argument as property value
- Added (by updating generated types): `CreativeWork::accessMode`, `CreativeWork::accessModeSufficient`, `CreativeWork::accessibilitySummary`, `Event::audience`, `FoodEstablishment::hasMenu`
- Removed (by updating generated types, note that this isn't breaking because `__call` will catch your method calls): `Menu::menuAddOn`

## 1.2.1 - 2017-02-20

- Fixed: New lines are considered and no longer break docs
- Fixed: HTML line breaks are removed from the docs

## 1.2.0 - 2017-02-07

- Added: Objects that implements `DateTimeInterface` are now formatted to an ISO 8601 compliant string
- Fixed: Some properties were missing due to some whitespace parsing issues

## 1.1.0 - 2017-01-03

- Added: `if` function to conditionally modify the schema

## 1.0.1 - 2017-01-03

- Fixed: Arrays of properties are now correctly serialized when converted to ld+json

## 1.0.0 - 2016-12-06

- Initial release
