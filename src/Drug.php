<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\DrugContract;
use Spatie\SchemaOrg\Contracts\MedicalEntityContract;
use Spatie\SchemaOrg\Contracts\ProductContract;
use Spatie\SchemaOrg\Contracts\SubstanceContract;
use Spatie\SchemaOrg\Contracts\ThingContract;

/**
 * A chemical or biologic substance, used as a medical therapy, that has a
 * physiological effect on an organism. Here the term drug is used
 * interchangeably with the term medicine although clinical knowledge makes a
 * clear difference between them.
 *
 * @see https://schema.org/Drug
 * @see https://health-lifesci.schema.org
 *
 */
class Drug extends BaseType implements DrugContract, MedicalEntityContract, ProductContract, SubstanceContract, ThingContract
{
    /**
     * An active ingredient, typically chemical compounds and/or biologic
     * substances.
     *
     * @param string|string[] $activeIngredient
     *
     * @return static
     *
     * @see https://schema.org/activeIngredient
     * @see https://health-lifesci.schema.org
     */
    public function activeIngredient($activeIngredient)
    {
        return $this->setProperty('activeIngredient', $activeIngredient);
    }

    /**
     * A property-value pair representing an additional characteristic of the
     * entity, e.g. a product feature or another characteristic for which there
     * is no matching property in schema.org.
     *
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. https://schema.org/width,
     * https://schema.org/color, https://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param \Spatie\SchemaOrg\Contracts\PropertyValueContract|\Spatie\SchemaOrg\Contracts\PropertyValueContract[] $additionalProperty
     *
     * @return static
     *
     * @see https://schema.org/additionalProperty
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

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
     * A route by which this drug may be administered, e.g. 'oral'.
     *
     * @param string|string[] $administrationRoute
     *
     * @return static
     *
     * @see https://schema.org/administrationRoute
     * @see https://health-lifesci.schema.org
     */
    public function administrationRoute($administrationRoute)
    {
        return $this->setProperty('administrationRoute', $administrationRoute);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param \Spatie\SchemaOrg\Contracts\AggregateRatingContract|\Spatie\SchemaOrg\Contracts\AggregateRatingContract[] $aggregateRating
     *
     * @return static
     *
     * @see https://schema.org/aggregateRating
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption
     * of alcohol while taking this drug.
     *
     * @param string|string[] $alcoholWarning
     *
     * @return static
     *
     * @see https://schema.org/alcoholWarning
     * @see https://health-lifesci.schema.org
     */
    public function alcoholWarning($alcoholWarning)
    {
        return $this->setProperty('alcoholWarning', $alcoholWarning);
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
     * An Amazon Standard Identification Number (ASIN) is a 10-character
     * alphanumeric unique identifier assigned by Amazon.com and its partners
     * for product identification within the Amazon organization (summary from
     * [Wikipedia](https://en.wikipedia.org/wiki/Amazon_Standard_Identification_Number)'s
     * article).
     *
     * Note also that this is a definition for how to include ASINs in
     * Schema.org data, and not a definition of ASINs in general - see
     * documentation from Amazon for authoritative details.
     * ASINs are most commonly encoded as text strings, but the [asin] property
     * supports URL/URI as potential values too.
     *
     * @param string|string[] $asin
     *
     * @return static
     *
     * @see https://schema.org/asin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function asin($asin)
    {
        return $this->setProperty('asin', $asin);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param \Spatie\SchemaOrg\Contracts\AudienceContract|\Spatie\SchemaOrg\Contracts\AudienceContract[] $audience
     *
     * @return static
     *
     * @see https://schema.org/audience
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An available dosage strength for the drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugStrengthContract|\Spatie\SchemaOrg\Contracts\DrugStrengthContract[] $availableStrength
     *
     * @return static
     *
     * @see https://schema.org/availableStrength
     * @see https://health-lifesci.schema.org
     */
    public function availableStrength($availableStrength)
    {
        return $this->setProperty('availableStrength', $availableStrength);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see https://schema.org/award
     */
    public function award($award)
    {
        return $this->setProperty('award', $award);
    }

    /**
     * Awards won by or for this item.
     *
     * @param string|string[] $awards
     *
     * @return static
     *
     * @see https://schema.org/awards
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param \Spatie\SchemaOrg\Contracts\BrandContract|\Spatie\SchemaOrg\Contracts\BrandContract[]|\Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $brand
     *
     * @return static
     *
     * @see https://schema.org/brand
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's
     * use by breastfeeding mothers.
     *
     * @param string|string[] $breastfeedingWarning
     *
     * @return static
     *
     * @see https://schema.org/breastfeedingWarning
     * @see https://health-lifesci.schema.org
     */
    public function breastfeedingWarning($breastfeedingWarning)
    {
        return $this->setProperty('breastfeedingWarning', $breastfeedingWarning);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param \Spatie\SchemaOrg\Contracts\CategoryCodeContract|\Spatie\SchemaOrg\Contracts\CategoryCodeContract[]|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract|\Spatie\SchemaOrg\Contracts\PhysicalActivityCategoryContract[]|\Spatie\SchemaOrg\Contracts\ThingContract|\Spatie\SchemaOrg\Contracts\ThingContract[]|string|string[] $category
     *
     * @return static
     *
     * @see https://schema.org/category
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     *
     * @param string|string[] $clincalPharmacology
     *
     * @return static
     *
     * @see https://schema.org/clincalPharmacology
     * @see https://health-lifesci.schema.org
     */
    public function clincalPharmacology($clincalPharmacology)
    {
        return $this->setProperty('clincalPharmacology', $clincalPharmacology);
    }

    /**
     * Description of the absorption and elimination of drugs, including their
     * concentration (pharmacokinetics, pK) and biological effects
     * (pharmacodynamics, pD).
     *
     * @param string|string[] $clinicalPharmacology
     *
     * @return static
     *
     * @see https://schema.org/clinicalPharmacology
     * @see https://health-lifesci.schema.org
     */
    public function clinicalPharmacology($clinicalPharmacology)
    {
        return $this->setProperty('clinicalPharmacology', $clinicalPharmacology);
    }

    /**
     * A medical code for the entity, taken from a controlled vocabulary or
     * ontology such as ICD-9, DiseasesDB, MeSH, SNOMED-CT, RxNorm, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalCodeContract|\Spatie\SchemaOrg\Contracts\MedicalCodeContract[] $code
     *
     * @return static
     *
     * @see https://schema.org/code
     * @see https://health-lifesci.schema.org
     */
    public function code($code)
    {
        return $this->setProperty('code', $code);
    }

    /**
     * The color of the product.
     *
     * @param string|string[] $color
     *
     * @return static
     *
     * @see https://schema.org/color
     */
    public function color($color)
    {
        return $this->setProperty('color', $color);
    }

    /**
     * The place where the product was assembled.
     *
     * @param string|string[] $countryOfAssembly
     *
     * @return static
     *
     * @see https://schema.org/countryOfAssembly
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfAssembly($countryOfAssembly)
    {
        return $this->setProperty('countryOfAssembly', $countryOfAssembly);
    }

    /**
     * The place where the item (typically [[Product]]) was last processed and
     * tested before importation.
     *
     * @param string|string[] $countryOfLastProcessing
     *
     * @return static
     *
     * @see https://schema.org/countryOfLastProcessing
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/991
     */
    public function countryOfLastProcessing($countryOfLastProcessing)
    {
        return $this->setProperty('countryOfLastProcessing', $countryOfLastProcessing);
    }

    /**
     * The country of origin of something, including products as well as
     * creative  works such as movie and TV content.
     *
     * In the case of TV and movie, this would be the country of the principle
     * offices of the production company or individual responsible for the
     * movie. For other kinds of [[CreativeWork]] it is difficult to provide
     * fully general guidance, and properties such as [[contentLocation]] and
     * [[locationCreated]] may be more applicable.
     *
     * In the case of products, the country of origin of the product. The exact
     * interpretation of this may vary by context and product type, and cannot
     * be fully enumerated here.
     *
     * @param \Spatie\SchemaOrg\Contracts\CountryContract|\Spatie\SchemaOrg\Contracts\CountryContract[] $countryOfOrigin
     *
     * @return static
     *
     * @see https://schema.org/countryOfOrigin
     */
    public function countryOfOrigin($countryOfOrigin)
    {
        return $this->setProperty('countryOfOrigin', $countryOfOrigin);
    }

    /**
     * The depth of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $depth
     *
     * @return static
     *
     * @see https://schema.org/depth
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
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
     * A dosage form in which this drug/supplement is available, e.g. 'tablet',
     * 'suspension', 'injection'.
     *
     * @param string|string[] $dosageForm
     *
     * @return static
     *
     * @see https://schema.org/dosageForm
     * @see https://health-lifesci.schema.org
     */
    public function dosageForm($dosageForm)
    {
        return $this->setProperty('dosageForm', $dosageForm);
    }

    /**
     * A dosing schedule for the drug for a given population, either observed,
     * recommended, or maximum dose based on the type used.
     *
     * @param \Spatie\SchemaOrg\Contracts\DoseScheduleContract|\Spatie\SchemaOrg\Contracts\DoseScheduleContract[] $doseSchedule
     *
     * @return static
     *
     * @see https://schema.org/doseSchedule
     * @see https://health-lifesci.schema.org
     */
    public function doseSchedule($doseSchedule)
    {
        return $this->setProperty('doseSchedule', $doseSchedule);
    }

    /**
     * The class of drug this belongs to (e.g., statins).
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugClassContract|\Spatie\SchemaOrg\Contracts\DrugClassContract[] $drugClass
     *
     * @return static
     *
     * @see https://schema.org/drugClass
     * @see https://health-lifesci.schema.org
     */
    public function drugClass($drugClass)
    {
        return $this->setProperty('drugClass', $drugClass);
    }

    /**
     * The unit in which the drug is measured, e.g. '5 mg tablet'.
     *
     * @param string|string[] $drugUnit
     *
     * @return static
     *
     * @see https://schema.org/drugUnit
     * @see https://health-lifesci.schema.org
     */
    public function drugUnit($drugUnit)
    {
        return $this->setProperty('drugUnit', $drugUnit);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to consumption
     * of specific foods while taking this drug.
     *
     * @param string|string[] $foodWarning
     *
     * @return static
     *
     * @see https://schema.org/foodWarning
     * @see https://health-lifesci.schema.org
     */
    public function foodWarning($foodWarning)
    {
        return $this->setProperty('foodWarning', $foodWarning);
    }

    /**
     * A [[Grant]] that directly or indirectly provide funding or sponsorship
     * for this item. See also [[ownershipFundingInfo]].
     *
     * @param \Spatie\SchemaOrg\Contracts\GrantContract|\Spatie\SchemaOrg\Contracts\GrantContract[] $funding
     *
     * @return static
     *
     * @see https://schema.org/funding
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/383
     */
    public function funding($funding)
    {
        return $this->setProperty('funding', $funding);
    }

    /**
     * A Global Trade Item Number
     * ([GTIN](https://www.gs1.org/standards/id-keys/gtin)). GTINs identify
     * trade items, including products and services, using numeric
     * identification codes.
     *
     * The GS1 [digital link
     * specifications](https://www.gs1.org/standards/Digital-Link/) express
     * GTINs as URLs (URIs, IRIs, etc.). Details including regular expression
     * examples can be found in, Section 6 of the GS1 URI Syntax specification;
     * see also [schema.org tracking
     * issue](https://github.com/schemaorg/schemaorg/issues/3156#issuecomment-1209522809)
     * for schema.org-specific discussion. A correct [[gtin]] value should be a
     * valid GTIN, which means that it should be an all-numeric string of either
     * 8, 12, 13 or 14 digits, or a "GS1 Digital Link" URL based on such a
     * string. The numeric component should also have a [valid GS1 check
     * digit](https://www.gs1.org/services/check-digit-calculator) and meet the
     * other rules for valid GTINs. See also [GS1's GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) and
     * [Wikipedia](https://en.wikipedia.org/wiki/Global_Trade_Item_Number) for
     * more details. Left-padding of the gtin values is not required or
     * encouraged. The [[gtin]] property generalizes the earlier [[gtin8]],
     * [[gtin12]], [[gtin13]], and [[gtin14]] properties.
     *
     * Note also that this is a definition for how to include GTINs in
     * Schema.org data, and not a definition of GTINs in general - see the GS1
     * documentation for authoritative details.
     *
     * @param string|string[] $gtin
     *
     * @return static
     *
     * @see https://schema.org/gtin
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function gtin($gtin)
    {
        return $this->setProperty('gtin', $gtin);
    }

    /**
     * The GTIN-12 code of the product, or the product to which the offer
     * refers. The GTIN-12 is the 12-digit GS1 Identification Key composed of a
     * U.P.C. Company Prefix, Item Reference, and Check Digit used to identify
     * trade items. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see https://schema.org/gtin12
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The GTIN-13 code of the product, or the product to which the offer
     * refers. This is equivalent to 13-digit ISBN codes and EAN UCC-13. Former
     * 12-digit UPC codes can be converted into a GTIN-13 code by simply adding
     * a preceding zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see https://schema.org/gtin13
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The GTIN-14 code of the product, or the product to which the offer
     * refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see https://schema.org/gtin14
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The GTIN-8 code of the product, or the product to which the offer refers.
     * This code is also known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see https://schema.org/gtin8
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * A medical guideline related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalGuidelineContract|\Spatie\SchemaOrg\Contracts\MedicalGuidelineContract[] $guideline
     *
     * @return static
     *
     * @see https://schema.org/guideline
     * @see https://health-lifesci.schema.org
     */
    public function guideline($guideline)
    {
        return $this->setProperty('guideline', $guideline);
    }

    /**
     * Used to tag an item to be intended or suitable for consumption or use by
     * adults only.
     *
     * @param \Spatie\SchemaOrg\Contracts\AdultOrientedEnumerationContract|\Spatie\SchemaOrg\Contracts\AdultOrientedEnumerationContract[] $hasAdultConsideration
     *
     * @return static
     *
     * @see https://schema.org/hasAdultConsideration
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2989
     */
    public function hasAdultConsideration($hasAdultConsideration)
    {
        return $this->setProperty('hasAdultConsideration', $hasAdultConsideration);
    }

    /**
     * Defines the energy efficiency Category (also known as "class" or
     * "rating") for a product according to an international energy efficiency
     * standard.
     *
     * @param \Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract|\Spatie\SchemaOrg\Contracts\EnergyConsumptionDetailsContract[] $hasEnergyConsumptionDetails
     *
     * @return static
     *
     * @see https://schema.org/hasEnergyConsumptionDetails
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2670
     */
    public function hasEnergyConsumptionDetails($hasEnergyConsumptionDetails)
    {
        return $this->setProperty('hasEnergyConsumptionDetails', $hasEnergyConsumptionDetails);
    }

    /**
     * A product measurement, for example the inseam of pants, the wheel size of
     * a bicycle, or the gauge of a screw. Usually an exact measurement, but can
     * also be a range of measurements for adjustable products, for example
     * belts and ski bindings.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $hasMeasurement
     *
     * @return static
     *
     * @see https://schema.org/hasMeasurement
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2811
     */
    public function hasMeasurement($hasMeasurement)
    {
        return $this->setProperty('hasMeasurement', $hasMeasurement);
    }

    /**
     * Specifies a MerchantReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract|\Spatie\SchemaOrg\Contracts\MerchantReturnPolicyContract[] $hasMerchantReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasMerchantReturnPolicy
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasMerchantReturnPolicy($hasMerchantReturnPolicy)
    {
        return $this->setProperty('hasMerchantReturnPolicy', $hasMerchantReturnPolicy);
    }

    /**
     * Indicates a ProductReturnPolicy that may be applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract|\Spatie\SchemaOrg\Contracts\ProductReturnPolicyContract[] $hasProductReturnPolicy
     *
     * @return static
     *
     * @see https://schema.org/hasProductReturnPolicy
     * @see https://attic.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2288
     */
    public function hasProductReturnPolicy($hasProductReturnPolicy)
    {
        return $this->setProperty('hasProductReturnPolicy', $hasProductReturnPolicy);
    }

    /**
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $height
     *
     * @return static
     *
     * @see https://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
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
     * Indicates the [[productGroupID]] for a [[ProductGroup]] that this product
     * [[isVariantOf]].
     *
     * @param string|string[] $inProductGroupWithID
     *
     * @return static
     *
     * @see https://schema.org/inProductGroupWithID
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function inProductGroupWithID($inProductGroupWithID)
    {
        return $this->setProperty('inProductGroupWithID', $inProductGroupWithID);
    }

    /**
     * The insurance plans that cover this drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\HealthInsurancePlanContract|\Spatie\SchemaOrg\Contracts\HealthInsurancePlanContract[] $includedInHealthInsurancePlan
     *
     * @return static
     *
     * @see https://schema.org/includedInHealthInsurancePlan
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function includedInHealthInsurancePlan($includedInHealthInsurancePlan)
    {
        return $this->setProperty('includedInHealthInsurancePlan', $includedInHealthInsurancePlan);
    }

    /**
     * Another drug that is known to interact with this drug in a way that
     * impacts the effect of this drug or causes a risk to the patient. Note:
     * disease interactions are typically captured as contraindications.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $interactingDrug
     *
     * @return static
     *
     * @see https://schema.org/interactingDrug
     * @see https://health-lifesci.schema.org
     */
    public function interactingDrug($interactingDrug)
    {
        return $this->setProperty('interactingDrug', $interactingDrug);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isAccessoryOrSparePartFor
     *
     * @return static
     *
     * @see https://schema.org/isAccessoryOrSparePartFor
     */
    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        return $this->setProperty('isAccessoryOrSparePartFor', $isAccessoryOrSparePartFor);
    }

    /**
     * True if the drug is available in a generic form (regardless of name).
     *
     * @param bool|bool[] $isAvailableGenerically
     *
     * @return static
     *
     * @see https://schema.org/isAvailableGenerically
     * @see https://health-lifesci.schema.org
     */
    public function isAvailableGenerically($isAvailableGenerically)
    {
        return $this->setProperty('isAvailableGenerically', $isAvailableGenerically);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[] $isConsumableFor
     *
     * @return static
     *
     * @see https://schema.org/isConsumableFor
     */
    public function isConsumableFor($isConsumableFor)
    {
        return $this->setProperty('isConsumableFor', $isConsumableFor);
    }

    /**
     * Indicates whether this content is family friendly.
     *
     * @param bool|bool[] $isFamilyFriendly
     *
     * @return static
     *
     * @see https://schema.org/isFamilyFriendly
     */
    public function isFamilyFriendly($isFamilyFriendly)
    {
        return $this->setProperty('isFamilyFriendly', $isFamilyFriendly);
    }

    /**
     * True if this item's name is a proprietary/brand name (vs. generic name).
     *
     * @param bool|bool[] $isProprietary
     *
     * @return static
     *
     * @see https://schema.org/isProprietary
     * @see https://health-lifesci.schema.org
     */
    public function isProprietary($isProprietary)
    {
        return $this->setProperty('isProprietary', $isProprietary);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isRelatedTo
     *
     * @return static
     *
     * @see https://schema.org/isRelatedTo
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|\Spatie\SchemaOrg\Contracts\ServiceContract|\Spatie\SchemaOrg\Contracts\ServiceContract[] $isSimilarTo
     *
     * @return static
     *
     * @see https://schema.org/isSimilarTo
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * Indicates the kind of product that this is a variant of. In the case of
     * [[ProductModel]], this is a pointer (from a ProductModel) to a base
     * product from which this product is a variant. It is safe to infer that
     * the variant inherits all product features from the base model, unless
     * defined locally. This is not transitive. In the case of a
     * [[ProductGroup]], the group description also serves as a template,
     * representing a set of Products that vary on explicitly defined, specific
     * dimensions only (so it defines both a set of variants, as well as which
     * values distinguish amongst those variants). When used with
     * [[ProductGroup]], this property can apply to any [[Product]] included in
     * the group.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductGroupContract|\Spatie\SchemaOrg\Contracts\ProductGroupContract[]|\Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[] $isVariantOf
     *
     * @return static
     *
     * @see https://schema.org/isVariantOf
     */
    public function isVariantOf($isVariantOf)
    {
        return $this->setProperty('isVariantOf', $isVariantOf);
    }

    /**
     * A predefined value from OfferItemCondition specifying the condition of
     * the product or service, or the products or services included in the
     * offer. Also used for product return policies to specify the condition of
     * products accepted for returns.
     *
     * @param \Spatie\SchemaOrg\Contracts\OfferItemConditionContract|\Spatie\SchemaOrg\Contracts\OfferItemConditionContract[] $itemCondition
     *
     * @return static
     *
     * @see https://schema.org/itemCondition
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * Keywords or tags used to describe some item. Multiple textual entries in
     * a keywords list are typically delimited by commas, or by repeating the
     * property.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $keywords
     *
     * @return static
     *
     * @see https://schema.org/keywords
     */
    public function keywords($keywords)
    {
        return $this->setProperty('keywords', $keywords);
    }

    /**
     * Link to the drug's label details.
     *
     * @param string|string[] $labelDetails
     *
     * @return static
     *
     * @see https://schema.org/labelDetails
     * @see https://health-lifesci.schema.org
     */
    public function labelDetails($labelDetails)
    {
        return $this->setProperty('labelDetails', $labelDetails);
    }

    /**
     * The drug or supplement's legal status, including any controlled substance
     * schedules that apply.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugLegalStatusContract|\Spatie\SchemaOrg\Contracts\DrugLegalStatusContract[]|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract|\Spatie\SchemaOrg\Contracts\MedicalEnumerationContract[]|string|string[] $legalStatus
     *
     * @return static
     *
     * @see https://schema.org/legalStatus
     * @see https://health-lifesci.schema.org
     */
    public function legalStatus($legalStatus)
    {
        return $this->setProperty('legalStatus', $legalStatus);
    }

    /**
     * An associated logo.
     *
     * @param \Spatie\SchemaOrg\Contracts\ImageObjectContract|\Spatie\SchemaOrg\Contracts\ImageObjectContract[]|string|string[] $logo
     *
     * @return static
     *
     * @see https://schema.org/logo
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
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
     * The manufacturer of the product.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $manufacturer
     *
     * @return static
     *
     * @see https://schema.org/manufacturer
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductContract|\Spatie\SchemaOrg\Contracts\ProductContract[]|string|string[] $material
     *
     * @return static
     *
     * @see https://schema.org/material
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * Recommended intake of this supplement for a given population as defined
     * by a specific recommending authority.
     *
     * @param \Spatie\SchemaOrg\Contracts\MaximumDoseScheduleContract|\Spatie\SchemaOrg\Contracts\MaximumDoseScheduleContract[] $maximumIntake
     *
     * @return static
     *
     * @see https://schema.org/maximumIntake
     * @see https://health-lifesci.schema.org
     */
    public function maximumIntake($maximumIntake)
    {
        return $this->setProperty('maximumIntake', $maximumIntake);
    }

    /**
     * The specific biochemical interaction through which this drug or
     * supplement produces its pharmacological effect.
     *
     * @param string|string[] $mechanismOfAction
     *
     * @return static
     *
     * @see https://schema.org/mechanismOfAction
     * @see https://health-lifesci.schema.org
     */
    public function mechanismOfAction($mechanismOfAction)
    {
        return $this->setProperty('mechanismOfAction', $mechanismOfAction);
    }

    /**
     * The system of medicine that includes this MedicalEntity, for example
     * 'evidence-based', 'homeopathic', 'chiropractic', etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicineSystemContract|\Spatie\SchemaOrg\Contracts\MedicineSystemContract[] $medicineSystem
     *
     * @return static
     *
     * @see https://schema.org/medicineSystem
     * @see https://health-lifesci.schema.org
     */
    public function medicineSystem($medicineSystem)
    {
        return $this->setProperty('medicineSystem', $medicineSystem);
    }

    /**
     * The [[mobileUrl]] property is provided for specific situations in which
     * data consumers need to determine whether one of several provided URLs is
     * a dedicated 'mobile site'.
     *
     * To discourage over-use, and reflecting intial usecases, the property is
     * expected only on [[Product]] and [[Offer]], rather than [[Thing]]. The
     * general trend in web technology is towards [responsive
     * design](https://en.wikipedia.org/wiki/Responsive_web_design) in which
     * content can be flexibly adapted to a wide range of browsing environments.
     * Pages and sites referenced with the long-established [[url]] property
     * should ideally also be usable on a wide variety of devices, including
     * mobile phones. In most cases, it would be pointless and counter
     * productive to attempt to update all [[url]] markup to use [[mobileUrl]]
     * for more mobile-oriented pages. The property is intended for the case
     * when items (primarily [[Product]] and [[Offer]]) have extra URLs hosted
     * on an additional "mobile site" alongside the main one. It should not be
     * taken as an endorsement of this publication style.
     *
     * @param string|string[] $mobileUrl
     *
     * @return static
     *
     * @see https://schema.org/mobileUrl
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/3134
     */
    public function mobileUrl($mobileUrl)
    {
        return $this->setProperty('mobileUrl', $mobileUrl);
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can
     * be from an external source. It is recommended to additionally provide
     * strong product identifiers via the gtin8/gtin13/gtin14 and mpn
     * properties.
     *
     * @param \Spatie\SchemaOrg\Contracts\ProductModelContract|\Spatie\SchemaOrg\Contracts\ProductModelContract[]|string|string[] $model
     *
     * @return static
     *
     * @see https://schema.org/model
     */
    public function model($model)
    {
        return $this->setProperty('model', $model);
    }

    /**
     * The Manufacturer Part Number (MPN) of the product, or the product to
     * which the offer refers.
     *
     * @param string|string[] $mpn
     *
     * @return static
     *
     * @see https://schema.org/mpn
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
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
     * Provides negative considerations regarding something, most typically in
     * pro/con lists for reviews (alongside [[positiveNotes]]). For symmetry
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described. Since product descriptions
     * tend to emphasise positive claims, it may be relatively unusual to find
     * [[negativeNotes]] used in this way. Nevertheless for the sake of
     * symmetry, [[negativeNotes]] can be used on [[Product]].
     *
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * negative is at the beginning of the list).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[]|\Spatie\SchemaOrg\Contracts\ListItemContract|\Spatie\SchemaOrg\Contracts\ListItemContract[]|\Spatie\SchemaOrg\Contracts\WebContentContract|\Spatie\SchemaOrg\Contracts\WebContentContract[]|string|string[] $negativeNotes
     *
     * @return static
     *
     * @see https://schema.org/negativeNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function negativeNotes($negativeNotes)
    {
        return $this->setProperty('negativeNotes', $negativeNotes);
    }

    /**
     * The generic name of this drug or supplement.
     *
     * @param string|string[] $nonProprietaryName
     *
     * @return static
     *
     * @see https://schema.org/nonProprietaryName
     * @see https://health-lifesci.schema.org
     */
    public function nonProprietaryName($nonProprietaryName)
    {
        return $this->setProperty('nonProprietaryName', $nonProprietaryName);
    }

    /**
     * Indicates the [NATO stock
     * number](https://en.wikipedia.org/wiki/NATO_Stock_Number) (nsn) of a
     * [[Product]].
     *
     * @param string|string[] $nsn
     *
     * @return static
     *
     * @see https://schema.org/nsn
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2126
     */
    public function nsn($nsn)
    {
        return $this->setProperty('nsn', $nsn);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event. Use [[businessFunction]] to indicate the kind of transaction
     * offered, i.e. sell, lease, etc. This property can also be used to
     * describe a [[Demand]]. While this property is listed as expected on a
     * number of common types, it can be used in others. In that case, using a
     * second type, such as Product or a subtype of Product, can clarify the
     * nature of the offer.
     *
     * @param \Spatie\SchemaOrg\Contracts\DemandContract|\Spatie\SchemaOrg\Contracts\DemandContract[]|\Spatie\SchemaOrg\Contracts\OfferContract|\Spatie\SchemaOrg\Contracts\OfferContract[] $offers
     *
     * @return static
     *
     * @see https://schema.org/offers
     * @link https://github.com/schemaorg/schemaorg/issues/2289
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * Any information related to overdose on a drug, including signs or
     * symptoms, treatments, contact information for emergency response.
     *
     * @param string|string[] $overdosage
     *
     * @return static
     *
     * @see https://schema.org/overdosage
     * @see https://health-lifesci.schema.org
     */
    public function overdosage($overdosage)
    {
        return $this->setProperty('overdosage', $overdosage);
    }

    /**
     * A pattern that something has, for example 'polka dot', 'striped',
     * 'Canadian flag'. Values are typically expressed as text, although links
     * to controlled value schemes are also supported.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|string|string[] $pattern
     *
     * @return static
     *
     * @see https://schema.org/pattern
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function pattern($pattern)
    {
        return $this->setProperty('pattern', $pattern);
    }

    /**
     * Provides positive considerations regarding something, for example product
     * highlights or (alongside [[negativeNotes]]) pro/con lists for reviews.
     *
     * In the case of a [[Review]], the property describes the [[itemReviewed]]
     * from the perspective of the review; in the case of a [[Product]], the
     * product itself is being described.
     *
     * The property values can be expressed either as unstructured text
     * (repeated as necessary), or if ordered, as a list (in which case the most
     * positive is at the beginning of the list).
     *
     * @param \Spatie\SchemaOrg\Contracts\ItemListContract|\Spatie\SchemaOrg\Contracts\ItemListContract[]|\Spatie\SchemaOrg\Contracts\ListItemContract|\Spatie\SchemaOrg\Contracts\ListItemContract[]|\Spatie\SchemaOrg\Contracts\WebContentContract|\Spatie\SchemaOrg\Contracts\WebContentContract[]|string|string[] $positiveNotes
     *
     * @return static
     *
     * @see https://schema.org/positiveNotes
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2832
     */
    public function positiveNotes($positiveNotes)
    {
        return $this->setProperty('positiveNotes', $positiveNotes);
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
     * Pregnancy category of this drug.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugPregnancyCategoryContract|\Spatie\SchemaOrg\Contracts\DrugPregnancyCategoryContract[] $pregnancyCategory
     *
     * @return static
     *
     * @see https://schema.org/pregnancyCategory
     * @see https://health-lifesci.schema.org
     */
    public function pregnancyCategory($pregnancyCategory)
    {
        return $this->setProperty('pregnancyCategory', $pregnancyCategory);
    }

    /**
     * Any precaution, guidance, contraindication, etc. related to this drug's
     * use during pregnancy.
     *
     * @param string|string[] $pregnancyWarning
     *
     * @return static
     *
     * @see https://schema.org/pregnancyWarning
     * @see https://health-lifesci.schema.org
     */
    public function pregnancyWarning($pregnancyWarning)
    {
        return $this->setProperty('pregnancyWarning', $pregnancyWarning);
    }

    /**
     * Link to prescribing information for the drug.
     *
     * @param string|string[] $prescribingInfo
     *
     * @return static
     *
     * @see https://schema.org/prescribingInfo
     * @see https://health-lifesci.schema.org
     */
    public function prescribingInfo($prescribingInfo)
    {
        return $this->setProperty('prescribingInfo', $prescribingInfo);
    }

    /**
     * Indicates the status of drug prescription, e.g. local catalogs
     * classifications or whether the drug is available by prescription or
     * over-the-counter, etc.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugPrescriptionStatusContract|\Spatie\SchemaOrg\Contracts\DrugPrescriptionStatusContract[]|string|string[] $prescriptionStatus
     *
     * @return static
     *
     * @see https://schema.org/prescriptionStatus
     * @see https://health-lifesci.schema.org
     */
    public function prescriptionStatus($prescriptionStatus)
    {
        return $this->setProperty('prescriptionStatus', $prescriptionStatus);
    }

    /**
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param string|string[] $productID
     *
     * @return static
     *
     * @see https://schema.org/productID
     */
    public function productID($productID)
    {
        return $this->setProperty('productID', $productID);
    }

    /**
     * The date of production of the item, e.g. vehicle.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $productionDate
     *
     * @return static
     *
     * @see https://schema.org/productionDate
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * Proprietary name given to the diet plan, typically by its originator or
     * creator.
     *
     * @param string|string[] $proprietaryName
     *
     * @return static
     *
     * @see https://schema.org/proprietaryName
     * @see https://health-lifesci.schema.org
     */
    public function proprietaryName($proprietaryName)
    {
        return $this->setProperty('proprietaryName', $proprietaryName);
    }

    /**
     * The date the item, e.g. vehicle, was purchased by the current owner.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $purchaseDate
     *
     * @return static
     *
     * @see https://schema.org/purchaseDate
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * If applicable, the organization that officially recognizes this entity as
     * part of its endorsed system of medicine.
     *
     * @param \Spatie\SchemaOrg\Contracts\OrganizationContract|\Spatie\SchemaOrg\Contracts\OrganizationContract[] $recognizingAuthority
     *
     * @return static
     *
     * @see https://schema.org/recognizingAuthority
     * @see https://health-lifesci.schema.org
     */
    public function recognizingAuthority($recognizingAuthority)
    {
        return $this->setProperty('recognizingAuthority', $recognizingAuthority);
    }

    /**
     * Any other drug related to this one, for example commonly-prescribed
     * alternatives.
     *
     * @param \Spatie\SchemaOrg\Contracts\DrugContract|\Spatie\SchemaOrg\Contracts\DrugContract[] $relatedDrug
     *
     * @return static
     *
     * @see https://schema.org/relatedDrug
     * @see https://health-lifesci.schema.org
     */
    public function relatedDrug($relatedDrug)
    {
        return $this->setProperty('relatedDrug', $relatedDrug);
    }

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $releaseDate
     *
     * @return static
     *
     * @see https://schema.org/releaseDate
     */
    public function releaseDate($releaseDate)
    {
        return $this->setProperty('releaseDate', $releaseDate);
    }

    /**
     * If applicable, a medical specialty in which this entity is relevant.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract|\Spatie\SchemaOrg\Contracts\MedicalSpecialtyContract[] $relevantSpecialty
     *
     * @return static
     *
     * @see https://schema.org/relevantSpecialty
     * @see https://health-lifesci.schema.org
     */
    public function relevantSpecialty($relevantSpecialty)
    {
        return $this->setProperty('relevantSpecialty', $relevantSpecialty);
    }

    /**
     * A review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $review
     *
     * @return static
     *
     * @see https://schema.org/review
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\ReviewContract|\Spatie\SchemaOrg\Contracts\ReviewContract[] $reviews
     *
     * @return static
     *
     * @see https://schema.org/reviews
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * The RxCUI drug identifier from RXNORM.
     *
     * @param string|string[] $rxcui
     *
     * @return static
     *
     * @see https://schema.org/rxcui
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1062
     */
    public function rxcui($rxcui)
    {
        return $this->setProperty('rxcui', $rxcui);
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
     * A standardized size of a product or creative work, specified either
     * through a simple textual string (for example 'XL', '32Wx34L'), a
     * QuantitativeValue with a unitCode, or a comprehensive and structured
     * [[SizeSpecification]]; in other cases, the [[width]], [[height]],
     * [[depth]] and [[weight]] properties may be more applicable.
     *
     * @param \Spatie\SchemaOrg\Contracts\DefinedTermContract|\Spatie\SchemaOrg\Contracts\DefinedTermContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[]|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract|\Spatie\SchemaOrg\Contracts\SizeSpecificationContract[]|string|string[] $size
     *
     * @return static
     *
     * @see https://schema.org/size
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/1797
     */
    public function size($size)
    {
        return $this->setProperty('size', $size);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see https://schema.org/sku
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
    }

    /**
     * A slogan or motto associated with the item.
     *
     * @param string|string[] $slogan
     *
     * @return static
     *
     * @see https://schema.org/slogan
     */
    public function slogan($slogan)
    {
        return $this->setProperty('slogan', $slogan);
    }

    /**
     * A medical study or trial related to this entity.
     *
     * @param \Spatie\SchemaOrg\Contracts\MedicalStudyContract|\Spatie\SchemaOrg\Contracts\MedicalStudyContract[] $study
     *
     * @return static
     *
     * @see https://schema.org/study
     * @see https://health-lifesci.schema.org
     */
    public function study($study)
    {
        return $this->setProperty('study', $study);
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
     * Any FDA or other warnings about the drug (text or URL).
     *
     * @param string|string[] $warning
     *
     * @return static
     *
     * @see https://schema.org/warning
     * @see https://health-lifesci.schema.org
     */
    public function warning($warning)
    {
        return $this->setProperty('warning', $warning);
    }

    /**
     * The weight of the product or person.
     *
     * @param \Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $weight
     *
     * @return static
     *
     * @see https://schema.org/weight
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The width of the item.
     *
     * @param \Spatie\SchemaOrg\Contracts\DistanceContract|\Spatie\SchemaOrg\Contracts\DistanceContract[]|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract|\Spatie\SchemaOrg\Contracts\QuantitativeValueContract[] $width
     *
     * @return static
     *
     * @see https://schema.org/width
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }
}
