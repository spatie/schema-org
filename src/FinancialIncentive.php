<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\FinancialIncentiveContract;
use Spatie\SchemaOrg\Contracts\IntangibleContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * <p>Represents financial incentives for goods/services offered by an
 * organization (or individual).</p>
 *
 * <p>Typically contains the [[name]] of the incentive, the
 * [[incentivizedItem]], the [[incentiveAmount]], the [[incentiveStatus]],
 * [[incentiveType]], the [[provider]] of the incentive, and
 * [[eligibleWithSupplier]].</p>
 *
 * <p>Optionally contains criteria on whether the incentive is limited based on
 * [[purchaseType]], [[purchasePriceLimit]], [[incomeLimit]], and the
 * [[qualifiedExpense]].
 *
 * @see https://schema.org/FinancialIncentive
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/3572
 *
 */
class FinancialIncentive extends BaseType implements FinancialIncentiveContract, IntangibleContract, ThingContract
{
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
     * The geographic area where a service or offered item is provided.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdministrativeAreaContract|\Spatie\SchemaOrg\Contracts\AdministrativeAreaContract[]|\Spatie\SchemaOrg\Contracts\GeoShapeContract|\Spatie\SchemaOrg\Contracts\GeoShapeContract[]|\Spatie\SchemaOrg\Contracts\PlaceContract|\Spatie\SchemaOrg\Contracts\PlaceContract[]|string|string[] $areaServed
     *
     * @return static
     *
     * @see https://schema.org/areaServed
     */
    public function areaServed($areaServed)
    {
        return $this->setProperty('areaServed', $areaServed);
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
     * The supplier of the incentivized item/service for which the incentive is
     * valid for such as a utility company, merchant, or contractor.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $eligibleWithSupplier
     *
     * @return static
     *
     * @see https://schema.org/eligibleWithSupplier
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function eligibleWithSupplier($eligibleWithSupplier)
    {
        return $this->setProperty('eligibleWithSupplier', $eligibleWithSupplier);
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
     * Describes the amount that can be redeemed from this incentive.
     *
     * <p>[[QuantitativeValue]]: Use this for incentives based on price (either
     * raw amount or percentage-based). For a raw amount example, "You can claim
     * $2,500 - $7,500 from the total cost of installation" would be represented
     * as the following:</p>
     *     {
     *         "@type": "QuantitativeValue",
     *         “minValue”: 2500,
     *         “maxValue”: 7500,
     *         "unitCode": "USD"
     *     }
     * <p>[[QuantitivateValue]] can also be used for percentage amounts. In such
     * cases, value is used to represent the incentive’s percentage, while
     * maxValue represents a limit (if one exists) to that incentive. The
     * unitCode should be 'P1' and the unitText should be '%', while
     * valueReference should be used for holding the currency type. For example,
     * "You can claim up to 30% of the total cost of installation, up to a
     * maximum of $7,500" would be:</p>
     *     {
     *         "@type": "QuantitativeValue",
     *         "value": 30,
     *         "unitCode": "P1",
     *         "unitText": "%",
     *         “maxValue”: 7500,
     *         “valueReference”: “USD”
     *     }
     * <p>[[UnitPriceSpecification]]: Use this for incentives that are based on
     * amounts rather than price. For example, a net metering rebate that pays
     * $10/kWh, up to $1,000:</p>
     *     {
     *         "@type": "UnitPriceSpecification",
     *         "price": 10,
     *         "priceCurrency": "USD",
     *         "referenceQuantity": 1,
     *         "unitCode": "DO3",
     *         "unitText": "kw/h",
     *         "maxPrice": 1000,
     *         "description": "$10 / kwh up to $1000"
     *     }
     * <p>[[LoanOrCredit]]: Use for incentives that are loan based. For example,
     * a loan of $4,000 - $50,000 with a repayment term of 10 years, interest
     * free would look like:</p>
     *     {
     *         "@type": "LoanOrCredit",
     *         "loanTerm": {
     *                 "@type":"QuantitativeValue",
     *                 "value":"10",
     *                 "unitCode": "ANN"
     *             },
     *         "amount":[
     *             {
     *                 "@type": "QuantitativeValue",
     *                 "Name":"fixed interest rate",
     *                 "value":"0",
     *             },
     *         ],
     *         "amount":[
     *             {
     *                 "@type": "MonetaryAmount",
     *                 "Name":"min loan amount",
     *                 "value":"4000",
     *                 "currency":"CAD"
     *             },
     *             {
     *                 "@type": "MonetaryAmount",
     *                 "Name":"max loan amount",
     *                 "value":"50000",
     *                 "currency":"CAD"
     *             }
     *         ],
     *     }
     *
     * In summary: <ul>* Use [[QuantitativeValue]] for absolute/percentage-based
     * incentives applied on the price of a good/service.
     * * Use [[UnitPriceSpecification]] for incentives based on a per-unit basis
     * (e.g. net metering).
     * * Use [[LoanOrCredit]] for loans/credits.
     * .
     *
     * @param \Spatie\SchemaOrg\Contracts\LoanOrCreditContract|\Spatie\SchemaOrg\Contracts\LoanOrCreditContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\UnitPriceSpecificationContract|\Spatie\SchemaOrg\Contracts\UnitPriceSpecificationContract[] $incentiveAmount
     *
     * @return static
     *
     * @see https://schema.org/incentiveAmount
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function incentiveAmount($incentiveAmount)
    {
        return $this->setProperty('incentiveAmount', $incentiveAmount);
    }

    /**
     * The status of the incentive (active, on hold, retired, etc.).
     *
     * @param \Spatie\SchemaOrg\Contracts\IncentiveStatusContract|\Spatie\SchemaOrg\Contracts\IncentiveStatusContract[] $incentiveStatus
     *
     * @return static
     *
     * @see https://schema.org/incentiveStatus
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function incentiveStatus($incentiveStatus)
    {
        return $this->setProperty('incentiveStatus', $incentiveStatus);
    }

    /**
     * The type of incentive offered (tax credit/rebate, tax deduction, tax
     * waiver, subsidies, etc.).
     *
     * @param \Spatie\SchemaOrg\Contracts\IncentiveTypeContract|\Spatie\SchemaOrg\Contracts\IncentiveTypeContract[] $incentiveType
     *
     * @return static
     *
     * @see https://schema.org/incentiveType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function incentiveType($incentiveType)
    {
        return $this->setProperty('incentiveType', $incentiveType);
    }

    /**
     * The type or specific product(s) and/or service(s) being incentivized.
     * <p>DefinedTermSets are used for product and service categories such as
     * the United Nations Standard Products and Services Code:</p>
     *     {
     *         "@type": "DefinedTerm",
     *         "inDefinedTermSet": "https://www.unspsc.org/",
     *         "termCode": "261315XX",
     *         "name": "Photovoltaic module"
     *     }
     *
     * <p>For a specific product or service, use the Product type:</p>
     *     {
     *         "@type": "Product",
     *         "name": "Kenmore White 17" Microwave",
     *     }
     * For multiple different incentivized items, use multiple [[DefinedTerm]]
     * or [[Product]].
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $incentivizedItem
     *
     * @return static
     *
     * @see https://schema.org/incentivizedItem
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function incentivizedItem($incentivizedItem)
    {
        return $this->setProperty('incentivizedItem', $incentivizedItem);
    }

    /**
     * Optional. Income limit for which the incentive is applicable for.
     *
     * <p>If MonetaryAmount is specified, this should be based on annualized
     * income (e.g. if an incentive is limited to those making <$114,000
     * annually):</p>
     *     {
     *         "@type": "MonetaryAmount",
     *         "maxValue": 114000,
     *         "currency": "USD",
     *     }
     *
     * Use Text for incentives that are limited based on other criteria, for
     * example if an incentive is only available to recipients making 120% of
     * the median poverty income in their area.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[]|string|string[] $incomeLimit
     *
     * @return static
     *
     * @see https://schema.org/incomeLimit
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function incomeLimit($incomeLimit)
    {
        return $this->setProperty('incomeLimit', $incomeLimit);
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
     * The service provider, service operator, or service performer; the goods
     * producer. Another party (a seller) may offer those services or goods on
     * behalf of the provider. A provider may also serve as the seller.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $provider
     *
     * @return static
     *
     * @see https://schema.org/provider
     * @see https://pending.schema.org
     */
    public function provider($provider)
    {
        return $this->setProperty('provider', $provider);
    }

    /**
     * The publisher of the article in question.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[]|\Spatie\SchemaOrg\Contracts\PersonContract|\Spatie\SchemaOrg\Contracts\PersonContract[] $publisher
     *
     * @return static
     *
     * @see https://schema.org/publisher
     */
    public function publisher($publisher)
    {
        return $this->setProperty('publisher', $publisher);
    }

    /**
     * Optional. The maximum price the item can have and still qualify for this
     * offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\MonetaryAmountContract|\Spatie\SchemaOrg\Contracts\MonetaryAmountContract[] $purchasePriceLimit
     *
     * @return static
     *
     * @see https://schema.org/purchasePriceLimit
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function purchasePriceLimit($purchasePriceLimit)
    {
        return $this->setProperty('purchasePriceLimit', $purchasePriceLimit);
    }

    /**
     * Optional. The type of purchase the consumer must make in order to qualify
     * for this incentive.
     *
     * @param \Spatie\SchemaOrg\Contracts\PurchaseTypeContract|\Spatie\SchemaOrg\Contracts\PurchaseTypeContract[] $purchaseType
     *
     * @return static
     *
     * @see https://schema.org/purchaseType
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function purchaseType($purchaseType)
    {
        return $this->setProperty('purchaseType', $purchaseType);
    }

    /**
     * Optional. The types of expenses that are covered by the incentive. For
     * example some incentives are only for the goods (tangible items) but the
     * services (labor) are excluded.
     *
     * @param \Spatie\SchemaOrg\Contracts\IncentiveQualifiedExpenseTypeContract|\Spatie\SchemaOrg\Contracts\IncentiveQualifiedExpenseTypeContract[] $qualifiedExpense
     *
     * @return static
     *
     * @see https://schema.org/qualifiedExpense
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3572
     */
    public function qualifiedExpense($qualifiedExpense)
    {
        return $this->setProperty('qualifiedExpense', $qualifiedExpense);
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

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validFrom
     *
     * @return static
     *
     * @see https://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $validThrough
     *
     * @return static
     *
     * @see https://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }
}
