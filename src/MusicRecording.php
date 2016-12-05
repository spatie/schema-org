<?php

namespace Spatie\SchemaOrg;

/**
 * A music recording (track), usually a single song.
 *
 * @see http://schema.org/MusicRecording
 */
class MusicRecording extends CreativeWork
{
    /**
     * The artist that performed this album or recording.
     *
     * @param \Spatie\SchemaOrg\MusicGroup $byArtist
     *
     * @return static
     *
     * @see http://schema.org/byArtist
     */
    public function byArtist($byArtist)
    {
        return $this->setProperty('byArtist', $byArtist);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Duration $duration
     *
     * @return static
     *
     * @see http://schema.org/duration
     */
    public function duration($duration)
    {
        return $this->setProperty('duration', $duration);
    }

    /**
     * The album to which this recording belongs.
     *
     * @param \Spatie\SchemaOrg\MusicAlbum $inAlbum
     *
     * @return static
     *
     * @see http://schema.org/inAlbum
     */
    public function inAlbum($inAlbum)
    {
        return $this->setProperty('inAlbum', $inAlbum);
    }

    /**
     * The playlist to which this recording belongs.
     *
     * @param \Spatie\SchemaOrg\MusicPlaylist $inPlaylist
     *
     * @return static
     *
     * @see http://schema.org/inPlaylist
     */
    public function inPlaylist($inPlaylist)
    {
        return $this->setProperty('inPlaylist', $inPlaylist);
    }

    /**
     * The International Standard Recording Code for the recording.
     *
     * @param string $isrcCode
     *
     * @return static
     *
     * @see http://schema.org/isrcCode
     */
    public function isrcCode($isrcCode)
    {
        return $this->setProperty('isrcCode', $isrcCode);
    }

    /**
     * The composition this track is a recording of.
     *
     * @param \Spatie\SchemaOrg\MusicComposition $recordingOf
     *
     * @return static
     *
     * @see http://schema.org/recordingOf
     */
    public function recordingOf($recordingOf)
    {
        return $this->setProperty('recordingOf', $recordingOf);
    }

}
