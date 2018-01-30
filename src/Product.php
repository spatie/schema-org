<?php

namespace Spatie\SchemaOrg;

/**
 * Any offered product or service. For example: a pair of shoes; a concert
 * ticket; the rental of a car; a haircut; or an episode of a TV show streamed
 * online.
 *
 * @see 
 */
class Product extends Thing
{
    /**
     * A property-value pair representing an additional characteristics of the
     * entitity, e.g. a product feature or another characteristic for which
     * there is no matching property in schema.org.
     * 
     * Note: Publishers should be aware that applications designed to use
     * specific schema.org properties (e.g. http://schema.org/width,
     * http://schema.org/color, http://schema.org/gtin13, ...) will typically
     * expect such data to be provided using those properties, rather than using
     * the generic property/value mechanism.
     *
     * @param PropertyValue|PropertyValue[] $additionalProperty
     *
     * @return static
     *
     * @see 
     */
    public function additionalProperty($additionalProperty)
    {
        return $this->setProperty('additionalProperty', $additionalProperty);
    }

    /**
     * The overall rating, based on a collection of reviews or ratings, of the
     * item.
     *
     * @param AggregateRating|AggregateRating[] $aggregateRating
     *
     * @return static
     *
     * @see 
     */
    public function aggregateRating($aggregateRating)
    {
        return $this->setProperty('aggregateRating', $aggregateRating);
    }

    /**
     * An intended audience, i.e. a group for whom something was created.
     *
     * @param Audience|Audience[] $audience
     *
     * @return static
     *
     * @see 
     */
    public function audience($audience)
    {
        return $this->setProperty('audience', $audience);
    }

    /**
     * An award won by or for this item.
     *
     * @param string|string[] $award
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function awards($awards)
    {
        return $this->setProperty('awards', $awards);
    }

    /**
     * The brand(s) associated with a product or service, or the brand(s)
     * maintained by an organization or business person.
     *
     * @param Brand|Brand[]|Organization|Organization[] $brand
     *
     * @return static
     *
     * @see 
     */
    public function brand($brand)
    {
        return $this->setProperty('brand', $brand);
    }

    /**
     * A category for the item. Greater signs or slashes can be used to
     * informally indicate a category hierarchy.
     *
     * @param string|string[]|Thing|Thing[] $category
     *
     * @return static
     *
     * @see 
     */
    public function category($category)
    {
        return $this->setProperty('category', $category);
    }

    /**
     * The color of the product.
     *
     * @param string|string[] $color
     *
     * @return static
     *
     * @see 
     */
    public function color($color)
    {
        return $this->setProperty('color', $color);
    }

    /**
     * The depth of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $depth
     *
     * @return static
     *
     * @see 
     */
    public function depth($depth)
    {
        return $this->setProperty('depth', $depth);
    }

    /**
     * The [GTIN-12](http://apps.gs1.org/GDD/glossary/Pages/GTIN-12.aspx) code
     * of the product, or the product to which the offer refers. The GTIN-12 is
     * the 12-digit GS1 Identification Key composed of a U.P.C. Company Prefix,
     * Item Reference, and Check Digit used to identify trade items. See [GS1
     * GTIN Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin12
     *
     * @return static
     *
     * @see 
     */
    public function gtin12($gtin12)
    {
        return $this->setProperty('gtin12', $gtin12);
    }

    /**
     * The [GTIN-13](http://apps.gs1.org/GDD/glossary/Pages/GTIN-13.aspx) code
     * of the product, or the product to which the offer refers. This is
     * equivalent to 13-digit ISBN codes and EAN UCC-13. Former 12-digit UPC
     * codes can be converted into a GTIN-13 code by simply adding a preceeding
     * zero. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin13
     *
     * @return static
     *
     * @see 
     */
    public function gtin13($gtin13)
    {
        return $this->setProperty('gtin13', $gtin13);
    }

    /**
     * The [GTIN-14](http://apps.gs1.org/GDD/glossary/Pages/GTIN-14.aspx) code
     * of the product, or the product to which the offer refers. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin14
     *
     * @return static
     *
     * @see 
     */
    public function gtin14($gtin14)
    {
        return $this->setProperty('gtin14', $gtin14);
    }

    /**
     * The [GTIN-8](http://apps.gs1.org/GDD/glossary/Pages/GTIN-8.aspx) code of
     * the product, or the product to which the offer refers. This code is also
     * known as EAN/UCC-8 or 8-digit EAN. See [GS1 GTIN
     * Summary](http://www.gs1.org/barcodes/technical/idkeys/gtin) for more
     * details.
     *
     * @param string|string[] $gtin8
     *
     * @return static
     *
     * @see 
     */
    public function gtin8($gtin8)
    {
        return $this->setProperty('gtin8', $gtin8);
    }

    /**
     * The height of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $height
     *
     * @return static
     *
     * @see 
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is an accessory or spare part.
     *
     * @param Product|Product[] $isAccessoryOrSparePartFor
     *
     * @return static
     *
     * @see 
     */
    public function isAccessoryOrSparePartFor($isAccessoryOrSparePartFor)
    {
        return $this->setProperty('isAccessoryOrSparePartFor', $isAccessoryOrSparePartFor);
    }

    /**
     * A pointer to another product (or multiple products) for which this
     * product is a consumable.
     *
     * @param Product|Product[] $isConsumableFor
     *
     * @return static
     *
     * @see 
     */
    public function isConsumableFor($isConsumableFor)
    {
        return $this->setProperty('isConsumableFor', $isConsumableFor);
    }

    /**
     * A pointer to another, somehow related product (or multiple products).
     *
     * @param Product|Product[]|Service|Service[] $isRelatedTo
     *
     * @return static
     *
     * @see 
     */
    public function isRelatedTo($isRelatedTo)
    {
        return $this->setProperty('isRelatedTo', $isRelatedTo);
    }

    /**
     * A pointer to another, functionally similar product (or multiple
     * products).
     *
     * @param Product|Product[]|Service|Service[] $isSimilarTo
     *
     * @return static
     *
     * @see 
     */
    public function isSimilarTo($isSimilarTo)
    {
        return $this->setProperty('isSimilarTo', $isSimilarTo);
    }

    /**
     * A predefined value from OfferItemCondition or a textual description of
     * the condition of the product or service, or the products or services
     * included in the offer.
     *
     * @param OfferItemCondition|OfferItemCondition[] $itemCondition
     *
     * @return static
     *
     * @see 
     */
    public function itemCondition($itemCondition)
    {
        return $this->setProperty('itemCondition', $itemCondition);
    }

    /**
     * An associated logo.
     *
     * @param ImageObject|ImageObject[]|string|string[] $logo
     *
     * @return static
     *
     * @see 
     */
    public function logo($logo)
    {
        return $this->setProperty('logo', $logo);
    }

    /**
     * The manufacturer of the product.
     *
     * @param Organization|Organization[] $manufacturer
     *
     * @return static
     *
     * @see 
     */
    public function manufacturer($manufacturer)
    {
        return $this->setProperty('manufacturer', $manufacturer);
    }

    /**
     * A material that something is made from, e.g. leather, wool, cotton,
     * paper.
     *
     * @param string|string[]|Product|Product[] $material
     *
     * @return static
     *
     * @see 
     */
    public function material($material)
    {
        return $this->setProperty('material', $material);
    }

    /**
     * The model of the product. Use with the URL of a ProductModel or a textual
     * representation of the model identifier. The URL of the ProductModel can
     * be from an external source. It is recommended to additionally provide
     * strong product identifiers via the gtin8/gtin13/gtin14 and mpn
     * properties.
     *
     * @param ProductModel|ProductModel[]|string|string[] $model
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function mpn($mpn)
    {
        return $this->setProperty('mpn', $mpn);
    }

    /**
     * An offer to provide this item&#x2014;for example, an offer to sell a
     * product, rent the DVD of a movie, perform a service, or give away tickets
     * to an event.
     *
     * @param Offer|Offer[] $offers
     *
     * @return static
     *
     * @see 
     */
    public function offers($offers)
    {
        return $this->setProperty('offers', $offers);
    }

    /**
     * The product identifier, such as ISBN. For example: ``` meta
     * itemprop="productID" content="isbn:123-456-789" ```.
     *
     * @param string|string[] $productID
     *
     * @return static
     *
     * @see 
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
     * @see 
     */
    public function productionDate($productionDate)
    {
        return $this->setProperty('productionDate', $productionDate);
    }

    /**
     * The date the item e.g. vehicle was purchased by the current owner.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $purchaseDate
     *
     * @return static
     *
     * @see 
     */
    public function purchaseDate($purchaseDate)
    {
        return $this->setProperty('purchaseDate', $purchaseDate);
    }

    /**
     * The release date of a product or product model. This can be used to
     * distinguish the exact variant of a product.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $releaseDate
     *
     * @return static
     *
     * @see 
     */
    public function releaseDate($releaseDate)
    {
        return $this->setProperty('releaseDate', $releaseDate);
    }

    /**
     * A review of the item.
     *
     * @param Review|Review[] $review
     *
     * @return static
     *
     * @see 
     */
    public function review($review)
    {
        return $this->setProperty('review', $review);
    }

    /**
     * Review of the item.
     *
     * @param Review|Review[] $reviews
     *
     * @return static
     *
     * @see 
     */
    public function reviews($reviews)
    {
        return $this->setProperty('reviews', $reviews);
    }

    /**
     * The Stock Keeping Unit (SKU), i.e. a merchant-specific identifier for a
     * product or service, or the product to which the offer refers.
     *
     * @param string|string[] $sku
     *
     * @return static
     *
     * @see 
     */
    public function sku($sku)
    {
        return $this->setProperty('sku', $sku);
    }

    /**
     * The weight of the product or person.
     *
     * @param QuantitativeValue|QuantitativeValue[] $weight
     *
     * @return static
     *
     * @see 
     */
    public function weight($weight)
    {
        return $this->setProperty('weight', $weight);
    }

    /**
     * The width of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $width
     *
     * @return static
     *
     * @see 
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

}
