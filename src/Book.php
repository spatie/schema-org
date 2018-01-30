<?php

namespace Spatie\SchemaOrg;

/**
 * A book.
 *
 * @see 
 */
class Book extends CreativeWork
{
    /**
     * The edition of the book.
     *
     * @param string|string[] $bookEdition
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
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
     * @see 
     */
    public function numberOfPages($numberOfPages)
    {
        return $this->setProperty('numberOfPages', $numberOfPages);
    }

}
