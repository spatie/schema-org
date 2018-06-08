<?php

namespace Spatie\SchemaOrg;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo
 * musician.
 *
 * @see http://schema.org/MusicGroup
 *
 * @mixin \Spatie\SchemaOrg\PerformingGroup
 */
class MusicGroup extends BaseType
{
    /**
     * A music album.
     *
     * @param MusicAlbum|MusicAlbum[] $album
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
     * @param MusicAlbum|MusicAlbum[] $albums
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
     * @param string|string[] $genre
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
     * @param Person|Person[] $musicGroupMember
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
     * A music recording (track)&#x2014;usually a single song. If an ItemList is
     * given, the list should contain items of type MusicRecording.
     *
     * @param ItemList|ItemList[]|MusicRecording|MusicRecording[] $track
     *
     * @return static
     *
     * @see http://schema.org/track
     */
    public function track($track)
    {
        return $this->setProperty('track', $track);
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     * @param MusicRecording|MusicRecording[] $tracks
     *
     * @return static
     *
     * @see http://schema.org/tracks
     */
    public function tracks($tracks)
    {
        return $this->setProperty('tracks', $tracks);
    }

}
