<?php

namespace Spatie\SchemaOrg;

/**
 * A datasheet or vendor specification of a product (in the sense of a
 * prototypical description).
 *
 * @see http://schema.org/ProductModel
 *
 * @mixin \Spatie\SchemaOrg\Product
 */
class ProductModel extends BaseType
{
    /**
     * A pointer to a base product from which this product is a variant. It is
     * safe to infer that the variant inherits all product features from the
     * base model, unless defined locally. This is not transitive.
     *
     * @param ProductModel|ProductModel[] $isVariantOf
     *
     * @return static
     *
     * @see http://schema.org/isVariantOf
     */
    public function isVariantOf($isVariantOf)
    {
        return $this->setProperty('isVariantOf', $isVariantOf);
    }

    /**
     * A pointer from a previous, often discontinued variant of the product to
     * its newer variant.
     *
     * @param ProductModel|ProductModel[] $predecessorOf
     *
     * @return static
     *
     * @see http://schema.org/predecessorOf
     */
    public function predecessorOf($predecessorOf)
    {
        return $this->setProperty('predecessorOf', $predecessorOf);
    }

    /**
     * A pointer from a newer variant of a product  to its previous, often
     * discontinued predecessor.
     *
     * @param ProductModel|ProductModel[] $successorOf
     *
     * @return static
     *
     * @see http://schema.org/successorOf
     */
    public function successorOf($successorOf)
    {
        return $this->setProperty('successorOf', $successorOf);
    }

}
