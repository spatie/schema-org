<?php

namespace Spatie\SchemaOrg;

/**
 * The publication format of the book.
 *
 * @see http://schema.org/BookFormatType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class BookFormatType extends BaseType
{
    /**
     * Book format: Audiobook. This is an enumerated value for use with the
     * bookFormat property. There is also a type 'Audiobook' in the bib
     * extension which includes Audiobook specific properties.
     *
     * @see http://schema.org/AudiobookFormat
     */
     const AudiobookFormat = 'http://schema.org/AudiobookFormat';

    /**
     * Book format: Ebook.
     *
     * @see http://schema.org/EBook
     */
     const EBook = 'http://schema.org/EBook';

    /**
     * Book format: Hardcover.
     *
     * @see http://schema.org/Hardcover
     */
     const Hardcover = 'http://schema.org/Hardcover';

    /**
     * Book format: Paperback.
     *
     * @see http://schema.org/Paperback
     */
     const Paperback = 'http://schema.org/Paperback';

}
