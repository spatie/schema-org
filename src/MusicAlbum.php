<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of music tracks.
 *
 * @see http://schema.org/MusicAlbum
 *
 * @mixin \Spatie\SchemaOrg\MusicPlaylist
 */
class MusicAlbum extends BaseType
{
    /**
     * Classification of the album by it's type of content: soundtrack, live
     * album, studio album, etc.
     *
     * @param MusicAlbumProductionType|MusicAlbumProductionType[] $albumProductionType
     *
     * @return static
     *
     * @see http://schema.org/albumProductionType
     */
    public function albumProductionType($albumProductionType)
    {
        return $this->setProperty('albumProductionType', $albumProductionType);
    }

    /**
     * A release of this album.
     *
     * @param MusicRelease|MusicRelease[] $albumRelease
     *
     * @return static
     *
     * @see http://schema.org/albumRelease
     */
    public function albumRelease($albumRelease)
    {
        return $this->setProperty('albumRelease', $albumRelease);
    }

    /**
     * The kind of release which this album is: single, EP or album.
     *
     * @param MusicAlbumReleaseType|MusicAlbumReleaseType[] $albumReleaseType
     *
     * @return static
     *
     * @see http://schema.org/albumReleaseType
     */
    public function albumReleaseType($albumReleaseType)
    {
        return $this->setProperty('albumReleaseType', $albumReleaseType);
    }

    /**
     * The artist that performed this album or recording.
     *
     * @param MusicGroup|MusicGroup[]|Person|Person[] $byArtist
     *
     * @return static
     *
     * @see http://schema.org/byArtist
     */
    public function byArtist($byArtist)
    {
        return $this->setProperty('byArtist', $byArtist);
    }

}
