<?php

namespace Spatie\SchemaOrg;

/**
 * Classification of the album by it's type of content: soundtrack, live album,
 * studio album, etc.
 *
 * @see http://schema.org/MusicAlbumProductionType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class MusicAlbumProductionType extends BaseType
{
    /**
     * CompilationAlbum.
     *
     * @see http://schema.org/CompilationAlbum
     */
     const CompilationAlbum = 'http://schema.org/CompilationAlbum';

    /**
     * DJMixAlbum.
     *
     * @see http://schema.org/DJMixAlbum
     */
     const DJMixAlbum = 'http://schema.org/DJMixAlbum';

    /**
     * DemoAlbum.
     *
     * @see http://schema.org/DemoAlbum
     */
     const DemoAlbum = 'http://schema.org/DemoAlbum';

    /**
     * LiveAlbum.
     *
     * @see http://schema.org/LiveAlbum
     */
     const LiveAlbum = 'http://schema.org/LiveAlbum';

    /**
     * MixtapeAlbum.
     *
     * @see http://schema.org/MixtapeAlbum
     */
     const MixtapeAlbum = 'http://schema.org/MixtapeAlbum';

    /**
     * RemixAlbum.
     *
     * @see http://schema.org/RemixAlbum
     */
     const RemixAlbum = 'http://schema.org/RemixAlbum';

    /**
     * SoundtrackAlbum.
     *
     * @see http://schema.org/SoundtrackAlbum
     */
     const SoundtrackAlbum = 'http://schema.org/SoundtrackAlbum';

    /**
     * SpokenWordAlbum.
     *
     * @see http://schema.org/SpokenWordAlbum
     */
     const SpokenWordAlbum = 'http://schema.org/SpokenWordAlbum';

    /**
     * StudioAlbum.
     *
     * @see http://schema.org/StudioAlbum
     */
     const StudioAlbum = 'http://schema.org/StudioAlbum';

}
