<?php

namespace Spatie\SchemaOrg;

/**
 * Format of this release (the type of recording media used, ie. compact disc,
 * digital media, LP, etc.).
 *
 * @see http://schema.org/MusicReleaseFormatType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class MusicReleaseFormatType extends BaseType
{
    /**
     * CDFormat.
     *
     * @see http://schema.org/CDFormat
     */
     const CDFormat = 'http://schema.org/CDFormat';

    /**
     * CassetteFormat.
     *
     * @see http://schema.org/CassetteFormat
     */
     const CassetteFormat = 'http://schema.org/CassetteFormat';

    /**
     * DVDFormat.
     *
     * @see http://schema.org/DVDFormat
     */
     const DVDFormat = 'http://schema.org/DVDFormat';

    /**
     * DigitalAudioTapeFormat.
     *
     * @see http://schema.org/DigitalAudioTapeFormat
     */
     const DigitalAudioTapeFormat = 'http://schema.org/DigitalAudioTapeFormat';

    /**
     * DigitalFormat.
     *
     * @see http://schema.org/DigitalFormat
     */
     const DigitalFormat = 'http://schema.org/DigitalFormat';

    /**
     * LaserDiscFormat.
     *
     * @see http://schema.org/LaserDiscFormat
     */
     const LaserDiscFormat = 'http://schema.org/LaserDiscFormat';

    /**
     * VinylFormat.
     *
     * @see http://schema.org/VinylFormat
     */
     const VinylFormat = 'http://schema.org/VinylFormat';

}
