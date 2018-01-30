<?php

namespace Spatie\SchemaOrg;

/**
 * A collection of music tracks in playlist form.
 *
 * @see 
 */
class MusicPlaylist extends CreativeWork
{
    /**
     * The number of tracks in this album or playlist.
     *
     * @param int|int[] $numTracks
     *
     * @return static
     *
     * @see 
     */
    public function numTracks($numTracks)
    {
        return $this->setProperty('numTracks', $numTracks);
    }

    /**
     * A music recording (track)&#x2014;usually a single song.
     *
     * @param MusicRecording|MusicRecording[] $tracks
     *
     * @return static
     *
     * @see 
     */
    public function tracks($tracks)
    {
        return $this->setProperty('tracks', $tracks);
    }

    /**
     * A music recording (track)&#x2014;usually a single song. If an ItemList is
     * given, the list should contain items of type MusicRecording.
     *
     * @param ItemList|ItemList[]|MusicRecording|MusicRecording[] $track
     *
     * @return static
     *
     * @see 
     */
    public function track($track)
    {
        return $this->setProperty('track', $track);
    }

}
