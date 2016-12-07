<?php

namespace Spatie\SchemaOrg;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
 *
 * @see http://schema.org/MusicGroup
 */
class MusicGroup extends PerformingGroup
{
    /**
     * A music album.
     *
     * @param \Spatie\SchemaOrg\MusicAlbum $album
     *
     * @return static
     *
     * @see http://schema.org/album
     */
    public function album($album)
    {
        return $this->setProperty('album', $album);
    }

    /**
     * A collection of music albums.
     *
     * @param \Spatie\SchemaOrg\MusicAlbum $albums
     *
     * @return static
     *
     * @see http://schema.org/albums
     */
    public function albums($albums)
    {
        return $this->setProperty('albums', $albums);
    }

    /**
     * Genre of the creative work, broadcast channel or group.
     *
     * @param string $genre
     *
     * @return static
     *
     * @see http://schema.org/genre
     */
    public function genre($genre)
    {
        return $this->setProperty('genre', $genre);
    }

    /**
     * A member of a music group&#x2014;for example, John, Paul, George, or
     * Ringo.
     *
     * @param \Spatie\SchemaOrg\Person $musicGroupMember
     *
     * @return static
     *
     * @see http://schema.org/musicGroupMember
     */
    public function musicGroupMember($musicGroupMember)
    {
        return $this->setProperty('musicGroupMember', $musicGroupMember);
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     * @param \Spatie\SchemaOrg\MusicRecording $tracks
     *
     * @return static
     *
     * @see http://schema.org/tracks
     */
    public function tracks($tracks)
    {
        return $this->setProperty('tracks', $tracks);
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is
     * given, the list should contain items of type MusicRecording.
     *
     * @param \Spatie\SchemaOrg\ItemList|\Spatie\SchemaOrg\MusicRecording $track
     *
     * @return static
     *
     * @see http://schema.org/track
     */
    public function track($track)
    {
        return $this->setProperty('track', $track);
    }

}
