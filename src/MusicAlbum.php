<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of music tracks.
 *
 * @see 
 */
class MusicAlbum extends MusicPlaylist
{
    /**
     * Classification of the album by it's type of content: soundtrack, live
     * album, studio album, etc.
     *
     * @param MusicAlbumProductionType|MusicAlbumProductionType[] $albumProductionType
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
     */
    public function albumReleaseType($albumReleaseType)
    {
        return $this->setProperty('albumReleaseType', $albumReleaseType);
    }

    /**
     * The artist that performed this album or recording.
     *
     * @param MusicGroup|MusicGroup[] $byArtist
     *
     * @return static
     *
     * @see 
     */
    public function byArtist($byArtist)
    {
        return $this->setProperty('byArtist', $byArtist);
    }

}
