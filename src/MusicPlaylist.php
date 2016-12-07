<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of music tracks in playlist form.
 *
 * @see http://schema.org/MusicPlaylist
 */
class MusicPlaylist extends CreativeWork
{
    /**
     * The number of tracks in this album or playlist.
     *
     * @param int $numTracks
     *
     * @return static
     *
     * @see http://schema.org/numTracks
     */
    public function numTracks($numTracks)
    {
        return $this->setProperty('numTracks', $numTracks);
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
