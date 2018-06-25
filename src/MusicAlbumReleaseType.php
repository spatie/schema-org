<?php

namespace Spatie\SchemaOrg;

/**
 * The kind of release which this album is: single, EP or album.
 *
 * @see http://schema.org/MusicAlbumReleaseType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class MusicAlbumReleaseType extends BaseType
{
    /**
     * AlbumRelease.
     *
     * @see http://schema.org/AlbumRelease
     */
     const AlbumRelease = 'http://schema.org/AlbumRelease';

    /**
     * BroadcastRelease.
     *
     * @see http://schema.org/BroadcastRelease
     */
     const BroadcastRelease = 'http://schema.org/BroadcastRelease';

    /**
     * EPRelease.
     *
     * @see http://schema.org/EPRelease
     */
     const EPRelease = 'http://schema.org/EPRelease';

    /**
     * SingleRelease.
     *
     * @see http://schema.org/SingleRelease
     */
     const SingleRelease = 'http://schema.org/SingleRelease';

}
