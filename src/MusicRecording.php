<?php

namespace Spatie\SchemaOrg;

/**
 * A music recording (track), usually a single song.
 *
 * @see 
 */
class MusicRecording extends CreativeWork
{
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

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $duration
     *
     * @return static
     *
     * @see 
     */
    public function duration($duration)
    {
        return $this->setProperty('duration', $duration);
    }

    /**
     * The album to which this recording belongs.
     *
     * @param MusicAlbum|MusicAlbum[] $inAlbum
     *
     * @return static
     *
     * @see 
     */
    public function inAlbum($inAlbum)
    {
        return $this->setProperty('inAlbum', $inAlbum);
    }

    /**
     * The playlist to which this recording belongs.
     *
     * @param MusicPlaylist|MusicPlaylist[] $inPlaylist
     *
     * @return static
     *
     * @see 
     */
    public function inPlaylist($inPlaylist)
    {
        return $this->setProperty('inPlaylist', $inPlaylist);
    }

    /**
     * The composition this track is a recording of.
     *
     * @param MusicComposition|MusicComposition[] $recordingOf
     *
     * @return static
     *
     * @see 
     */
    public function recordingOf($recordingOf)
    {
        return $this->setProperty('recordingOf', $recordingOf);
    }

    /**
     * The International Standard Recording Code for the recording.
     *
     * @param string|string[] $isrcCode
     *
     * @return static
     *
     * @see 
     */
    public function isrcCode($isrcCode)
    {
        return $this->setProperty('isrcCode', $isrcCode);
    }

}
