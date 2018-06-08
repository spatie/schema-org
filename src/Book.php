<?php

namespace Spatie\SchemaOrg;

/**
 * A book.
 *
 * @see http://schema.org/Book
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Book extends BaseType
{
    /**
     * The edition of the book.
     *
     * @param string|string[] $bookEdition
     *
     * @return static
     *
     * @see http://schema.org/bookEdition
     */
    public function bookEdition($bookEdition)
    {
        return $this->setProperty('bookEdition', $bookEdition);
    }

    /**
     * The format of the book.
     *
     * @param BookFormatType|BookFormatType[] $bookFormat
     *
     * @return static
     *
     * @see http://schema.org/bookFormat
     */
    public function bookFormat($bookFormat)
    {
        return $this->setProperty('bookFormat', $bookFormat);
    }

    /**
     * The illustrator of the book.
     *
     * @param Person|Person[] $illustrator
     *
     * @return static
     *
     * @see http://schema.org/illustrator
     */
    public function illustrator($illustrator)
    {
        return $this->setProperty('illustrator', $illustrator);
    }

    /**
     * The ISBN of the book.
     *
     * @param string|string[] $isbn
     *
     * @return static
     *
     * @see http://schema.org/isbn
     */
    public function isbn($isbn)
    {
        return $this->setProperty('isbn', $isbn);
    }

    /**
     * The number of pages in the book.
     *
     * @param int|int[] $numberOfPages
     *
     * @return static
     *
     * @see http://schema.org/numberOfPages
     */
    public function numberOfPages($numberOfPages)
    {
        return $this->setProperty('numberOfPages', $numberOfPages);
    }

}
