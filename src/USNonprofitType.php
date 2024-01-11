<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\EnumerationContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\NonprofitTypeContract;
use Spatie\SchemaOrg\Contracts\ThingContract;
use Spatie\SchemaOrg\Contracts\USNonprofitTypeContract;

/**
 * USNonprofitType: Non-profit organization type originating from the United
 * States.
 *
 * @see https://schema.org/USNonprofitType
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2543
 *
 * @method static supersededBy($supersededBy) The value should be instance of pending types Class|Class[]|Enumeration|Enumeration[]|Property|Property[]
 */
class USNonprofitType extends BaseType implements USNonprofitTypeContract, EnumerationContract, IntangibleContract, NonprofitTypeContract, ThingContract
{
    /**
     * Nonprofit501a: Non-profit type referring to Farmers’ Cooperative
     * Associations.
     *
     * @see https://schema.org/Nonprofit501a
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501a = 'https://schema.org/Nonprofit501a';

    /**
     * Nonprofit501c1: Non-profit type referring to Corporations Organized Under
     * Act of Congress, including Federal Credit Unions and National Farm Loan
     * Associations.
     *
     * @see https://schema.org/Nonprofit501c1
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c1 = 'https://schema.org/Nonprofit501c1';

    /**
     * Nonprofit501c10: Non-profit type referring to Domestic Fraternal
     * Societies and Associations.
     *
     * @see https://schema.org/Nonprofit501c10
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c10 = 'https://schema.org/Nonprofit501c10';

    /**
     * Nonprofit501c11: Non-profit type referring to Teachers' Retirement Fund
     * Associations.
     *
     * @see https://schema.org/Nonprofit501c11
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c11 = 'https://schema.org/Nonprofit501c11';

    /**
     * Nonprofit501c12: Non-profit type referring to Benevolent Life Insurance
     * Associations, Mutual Ditch or Irrigation Companies, Mutual or Cooperative
     * Telephone Companies.
     *
     * @see https://schema.org/Nonprofit501c12
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c12 = 'https://schema.org/Nonprofit501c12';

    /**
     * Nonprofit501c13: Non-profit type referring to Cemetery Companies.
     *
     * @see https://schema.org/Nonprofit501c13
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c13 = 'https://schema.org/Nonprofit501c13';

    /**
     * Nonprofit501c14: Non-profit type referring to State-Chartered Credit
     * Unions, Mutual Reserve Funds.
     *
     * @see https://schema.org/Nonprofit501c14
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c14 = 'https://schema.org/Nonprofit501c14';

    /**
     * Nonprofit501c15: Non-profit type referring to Mutual Insurance Companies
     * or Associations.
     *
     * @see https://schema.org/Nonprofit501c15
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c15 = 'https://schema.org/Nonprofit501c15';

    /**
     * Nonprofit501c16: Non-profit type referring to Cooperative Organizations
     * to Finance Crop Operations.
     *
     * @see https://schema.org/Nonprofit501c16
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c16 = 'https://schema.org/Nonprofit501c16';

    /**
     * Nonprofit501c17: Non-profit type referring to Supplemental Unemployment
     * Benefit Trusts.
     *
     * @see https://schema.org/Nonprofit501c17
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c17 = 'https://schema.org/Nonprofit501c17';

    /**
     * Nonprofit501c18: Non-profit type referring to Employee Funded Pension
     * Trust (created before 25 June 1959).
     *
     * @see https://schema.org/Nonprofit501c18
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c18 = 'https://schema.org/Nonprofit501c18';

    /**
     * Nonprofit501c19: Non-profit type referring to Post or Organization of
     * Past or Present Members of the Armed Forces.
     *
     * @see https://schema.org/Nonprofit501c19
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c19 = 'https://schema.org/Nonprofit501c19';

    /**
     * Nonprofit501c2: Non-profit type referring to Title-holding Corporations
     * for Exempt Organizations.
     *
     * @see https://schema.org/Nonprofit501c2
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c2 = 'https://schema.org/Nonprofit501c2';

    /**
     * Nonprofit501c20: Non-profit type referring to Group Legal Services Plan
     * Organizations.
     *
     * @see https://schema.org/Nonprofit501c20
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c20 = 'https://schema.org/Nonprofit501c20';

    /**
     * Nonprofit501c21: Non-profit type referring to Black Lung Benefit Trusts.
     *
     * @see https://schema.org/Nonprofit501c21
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c21 = 'https://schema.org/Nonprofit501c21';

    /**
     * Nonprofit501c22: Non-profit type referring to Withdrawal Liability
     * Payment Funds.
     *
     * @see https://schema.org/Nonprofit501c22
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c22 = 'https://schema.org/Nonprofit501c22';

    /**
     * Nonprofit501c23: Non-profit type referring to Veterans Organizations.
     *
     * @see https://schema.org/Nonprofit501c23
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c23 = 'https://schema.org/Nonprofit501c23';

    /**
     * Nonprofit501c24: Non-profit type referring to Section 4049 ERISA Trusts.
     *
     * @see https://schema.org/Nonprofit501c24
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c24 = 'https://schema.org/Nonprofit501c24';

    /**
     * Nonprofit501c25: Non-profit type referring to Real Property Title-Holding
     * Corporations or Trusts with Multiple Parents.
     *
     * @see https://schema.org/Nonprofit501c25
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c25 = 'https://schema.org/Nonprofit501c25';

    /**
     * Nonprofit501c26: Non-profit type referring to State-Sponsored
     * Organizations Providing Health Coverage for High-Risk Individuals.
     *
     * @see https://schema.org/Nonprofit501c26
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c26 = 'https://schema.org/Nonprofit501c26';

    /**
     * Nonprofit501c27: Non-profit type referring to State-Sponsored Workers'
     * Compensation Reinsurance Organizations.
     *
     * @see https://schema.org/Nonprofit501c27
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c27 = 'https://schema.org/Nonprofit501c27';

    /**
     * Nonprofit501c28: Non-profit type referring to National Railroad
     * Retirement Investment Trusts.
     *
     * @see https://schema.org/Nonprofit501c28
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c28 = 'https://schema.org/Nonprofit501c28';

    /**
     * Nonprofit501c3: Non-profit type referring to Religious, Educational,
     * Charitable, Scientific, Literary, Testing for Public Safety, Fostering
     * National or International Amateur Sports Competition, or Prevention of
     * Cruelty to Children or Animals Organizations.
     *
     * @see https://schema.org/Nonprofit501c3
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c3 = 'https://schema.org/Nonprofit501c3';

    /**
     * Nonprofit501c4: Non-profit type referring to Civic Leagues, Social
     * Welfare Organizations, and Local Associations of Employees.
     *
     * @see https://schema.org/Nonprofit501c4
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c4 = 'https://schema.org/Nonprofit501c4';

    /**
     * Nonprofit501c5: Non-profit type referring to Labor, Agricultural and
     * Horticultural Organizations.
     *
     * @see https://schema.org/Nonprofit501c5
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c5 = 'https://schema.org/Nonprofit501c5';

    /**
     * Nonprofit501c6: Non-profit type referring to Business Leagues, Chambers
     * of Commerce, Real Estate Boards.
     *
     * @see https://schema.org/Nonprofit501c6
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c6 = 'https://schema.org/Nonprofit501c6';

    /**
     * Nonprofit501c7: Non-profit type referring to Social and Recreational
     * Clubs.
     *
     * @see https://schema.org/Nonprofit501c7
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c7 = 'https://schema.org/Nonprofit501c7';

    /**
     * Nonprofit501c8: Non-profit type referring to Fraternal Beneficiary
     * Societies and Associations.
     *
     * @see https://schema.org/Nonprofit501c8
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c8 = 'https://schema.org/Nonprofit501c8';

    /**
     * Nonprofit501c9: Non-profit type referring to Voluntary Employee
     * Beneficiary Associations.
     *
     * @see https://schema.org/Nonprofit501c9
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501c9 = 'https://schema.org/Nonprofit501c9';

    /**
     * Nonprofit501d: Non-profit type referring to Religious and Apostolic
     * Associations.
     *
     * @see https://schema.org/Nonprofit501d
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501d = 'https://schema.org/Nonprofit501d';

    /**
     * Nonprofit501e: Non-profit type referring to Cooperative Hospital Service
     * Organizations.
     *
     * @see https://schema.org/Nonprofit501e
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501e = 'https://schema.org/Nonprofit501e';

    /**
     * Nonprofit501f: Non-profit type referring to Cooperative Service
     * Organizations.
     *
     * @see https://schema.org/Nonprofit501f
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501f = 'https://schema.org/Nonprofit501f';

    /**
     * Nonprofit501k: Non-profit type referring to Child Care Organizations.
     *
     * @see https://schema.org/Nonprofit501k
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501k = 'https://schema.org/Nonprofit501k';

    /**
     * Nonprofit501n: Non-profit type referring to Charitable Risk Pools.
     *
     * @see https://schema.org/Nonprofit501n
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501n = 'https://schema.org/Nonprofit501n';

    /**
     * Nonprofit501q: Non-profit type referring to Credit Counseling
     * Organizations.
     *
     * @see https://schema.org/Nonprofit501q
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit501q = 'https://schema.org/Nonprofit501q';

    /**
     * Nonprofit527: Non-profit type referring to political organizations.
     *
     * @see https://schema.org/Nonprofit527
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2543
     */
    public const Nonprofit527 = 'https://schema.org/Nonprofit527';

    /**
     * An additional type for the item, typically used for adding more specific
     * types from external vocabularies in microdata syntax. This is a
     * relationship between something and a class that the thing is in.
     * Typically the value is a URI-identified RDF class, and in this case
     * corresponds to the
     *     use of rdf:type in RDF. Text values can be used sparingly, for cases
     * where useful information can be added without their being an appropriate
     * schema to reference. In the case of text values, the class label should
     * follow the schema.org [style
     * guide](https://schema.org/docs/styleguide.html).
     *
     * @param string|string[] $additionalType
     *
     * @return static
     *
     * @see https://schema.org/additionalType
     */
    public function additionalType($additionalType)
    {
        return $this->setProperty('additionalType', $additionalType);
    }

    /**
     * An alias for the item.
     *
     * @param string|string[] $alternateName
     *
     * @return static
     *
     * @see https://schema.org/alternateName
     */
    public function alternateName($alternateName)
    {
        return $this->setProperty('alternateName', $alternateName);
    }

    /**
     * A description of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\TextObjectContract|\Spatie\SchemaOrg\Contracts\TextObjectContract[]|string|string[] $description
     *
     * @return static
     *
     * @see https://schema.org/description
     */
    public function description($description)
    {
        return $this->setProperty('description', $description);
    }

    /**
     * A sub property of description. A short description of the item used to
     * disambiguate from other, similar items. Information from other properties
     * (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     *
     * @param string|string[] $disambiguatingDescription
     *
     * @return static
     *
     * @see https://schema.org/disambiguatingDescription
     */
    public function disambiguatingDescription($disambiguatingDescription)
    {
        return $this->setProperty('disambiguatingDescription', $disambiguatingDescription);
    }

    /**
     * The identifier property represents any kind of identifier for any kind of
     * [[Thing]], such as ISBNs, GTIN codes, UUIDs etc. Schema.org provides
     * dedicated properties for representing many of these, either as textual
     * strings or as URL (URI) links. See [background
     * notes](/docs/datamodel.html#identifierBg) for more details.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[]|string|string[] $identifier
     *
     * @return static
     *
     * @see https://schema.org/identifier
     */
    public function identifier($identifier)
    {
        return $this->setProperty('identifier', $identifier);
    }

    /**
     * An image of the item. This can be a [[URL]] or a fully described
     * [[ImageObject]].
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $image
     *
     * @return static
     *
     * @see https://schema.org/image
     */
    public function image($image)
    {
        return $this->setProperty('image', $image);
    }

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main
     * entity being described. See [background
     * notes](/docs/datamodel.html#mainEntityBackground) for details.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|string|string[] $mainEntityOfPage
     *
     * @return static
     *
     * @see https://schema.org/mainEntityOfPage
     */
    public function mainEntityOfPage($mainEntityOfPage)
    {
        return $this->setProperty('mainEntityOfPage', $mainEntityOfPage);
    }

    /**
     * The name of the item.
     *
     * @param string|string[] $name
     *
     * @return static
     *
     * @see https://schema.org/name
     */
    public function name($name)
    {
        return $this->setProperty('name', $name);
    }

    /**
     * Indicates a potential Action, which describes an idealized action in
     * which this thing would play an 'object' role.
     *
     * @param \Spatie\SchemaOrg\Contracts\ActionContract|\Spatie\SchemaOrg\Contracts\ActionContract[] $potentialAction
     *
     * @return static
     *
     * @see https://schema.org/potentialAction
     */
    public function potentialAction($potentialAction)
    {
        return $this->setProperty('potentialAction', $potentialAction);
    }

    /**
     * URL of a reference Web page that unambiguously indicates the item's
     * identity. E.g. the URL of the item's Wikipedia page, Wikidata entry, or
     * official website.
     *
     * @param string|string[] $sameAs
     *
     * @return static
     *
     * @see https://schema.org/sameAs
     */
    public function sameAs($sameAs)
    {
        return $this->setProperty('sameAs', $sameAs);
    }

    /**
     * A CreativeWork or Event about this Thing.
     *
     * @param \Spatie\SchemaOrg\Contracts\CreativeWorkContract|\Spatie\SchemaOrg\Contracts\CreativeWorkContract[]|\Spatie\SchemaOrg\Contracts\EventContract|\Spatie\SchemaOrg\Contracts\EventContract[] $subjectOf
     *
     * @return static
     *
     * @see https://schema.org/subjectOf
     * @link https://github.com/schemaorg/schemaorg/issues/1670
     */
    public function subjectOf($subjectOf)
    {
        return $this->setProperty('subjectOf', $subjectOf);
    }

    /**
     * URL of the item.
     *
     * @param string|string[] $url
     *
     * @return static
     *
     * @see https://schema.org/url
     */
    public function url($url)
    {
        return $this->setProperty('url', $url);
    }
}
