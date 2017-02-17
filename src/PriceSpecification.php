<?php

namespace Spatie\SchemaOrg;

/**
 * A structured value representing a price or price range. Typically, only the
 * subclasses of this type are used for markup. It is recommended to use
 * [[MonetaryAmount]] to describe independent amounts of money such as a salary,
 * credit card limits, etc.
 *
 * @see http://schema.org/PriceSpecification
 */
class PriceSpecification extends StructuredValue
{
    /**
     * The interval and unit of measurement of ordering quantities for which the
     * offer or price specification is valid. This allows e.g. specifying that a
     * certain freight charge is valid only for a certain quantity.
     *
     * @param \Spatie\SchemaOrg\QuantitativeValue $eligibleQuantity
     *
     * @return static
     *
     * @see http://schema.org/eligibleQuantity
     */
    public function eligibleQuantity($eligibleQuantity)
    {
        return $this->setProperty('eligibleQuantity', $eligibleQuantity);
    }

    /**
     * The transaction volume, in a monetary unit, for which the offer or price
     * specification is valid, e.g. for indicating a minimal purchasing volume,
     * to express free shipping above a certain order volume, or to limit the
     * acceptance of credit cards to purchases to a certain minimal amount.
     *
     * @param \Spatie\SchemaOrg\PriceSpecification $eligibleTransactionVolume
     *
     * @return static
     *
     * @see http://schema.org/eligibleTransactionVolume
     */
    public function eligibleTransactionVolume($eligibleTransactionVolume)
    {
        return $this->setProperty('eligibleTransactionVolume', $eligibleTransactionVolume);
    }

    /**
     * The highest price if the price is a range.
     *
     * @param float|int $maxPrice
     *
     * @return static
     *
     * @see http://schema.org/maxPrice
     */
    public function maxPrice($maxPrice)
    {
        return $this->setProperty('maxPrice', $maxPrice);
    }

    /**
     * The lowest price if the price is a range.
     *
     * @param float|int $minPrice
     *
     * @return static
     *
     * @see http://schema.org/minPrice
     */
    public function minPrice($minPrice)
    {
        return $this->setProperty('minPrice', $minPrice);
    }

    /**
     * The offer price of a product, or of a price component when attached to
     * PriceSpecification and its subtypes.
     * 
     * Usage guidelines:
     * 
     * * Use the [[priceCurrency]] property (with [ISO 4217
     * codes](http://en.wikipedia.org/wiki/ISO_4217#Active_codes) e.g. "USD")
     * instead of
     *       including [ambiguous
     * symbols](http://en.wikipedia.org/wiki/Dollar_sign#Currencies_that_use_the_dollar_or_peso_sign)
     * such as '$' in the value.
     * * Use '.' (Unicode 'FULL STOP' (U+002E)) rather than ',' to indicate a
     * decimal point. Avoid using these symbols as a readability separator.
     * * Note that both
     * [RDFa](http://www.w3.org/TR/xhtml-rdfa-primer/#using-the-content-attribute)
     * and Microdata syntax allow the use of a "content=" attribute for
     * publishing simple machine-readable values alongside more human-friendly
     * formatting.
     * * Use values from 0123456789 (Unicode 'DIGIT ZERO' (U+0030) to 'DIGIT
     * NINE' (U+0039)) rather than superficially similiar Unicode symbols.
     *
     * @param float|int|string $price
     *
     * @return static
     *
     * @see http://schema.org/price
     */
    public function price($price)
    {
        return $this->setProperty('price', $price);
    }

    /**
     * The date when the item becomes valid.
     *
     * @param \DateTimeInterface $validFrom
     *
     * @return static
     *
     * @see http://schema.org/validFrom
     */
    public function validFrom($validFrom)
    {
        return $this->setProperty('validFrom', $validFrom);
    }

    /**
     * The date after when the item is not valid. For example the end of an
     * offer, salary period, or a period of opening hours.
     *
     * @param \DateTimeInterface $validThrough
     *
     * @return static
     *
     * @see http://schema.org/validThrough
     */
    public function validThrough($validThrough)
    {
        return $this->setProperty('validThrough', $validThrough);
    }

    /**
     * Specifies whether the applicable value-added tax (VAT) is included in the
     * price specification or not.
     *
     * @param bool $valueAddedTaxIncluded
     *
     * @return static
     *
     * @see http://schema.org/valueAddedTaxIncluded
     */
    public function valueAddedTaxIncluded($valueAddedTaxIncluded)
    {
        return $this->setProperty('valueAddedTaxIncluded', $valueAddedTaxIncluded);
    }

    /**
     * The currency (in 3-letter ISO 4217 format) of the price or a price
     * component, when attached to [[PriceSpecification]] and its subtypes.
     *
     * @param string $priceCurrency
     *
     * @return static
     *
     * @see http://schema.org/priceCurrency
     */
    public function priceCurrency($priceCurrency)
    {
        return $this->setProperty('priceCurrency', $priceCurrency);
    }

}
