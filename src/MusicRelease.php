<?php

namespace Spatie\SchemaOrg;

/**
 * A MusicRelease is a specific release of a music album.
 *
 * @see 
 */
class MusicRelease extends MusicPlaylist
{
    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by
     * Lady Gaga.
     *
     * @param Person|Person[]|Organization|Organization[] $creditedTo
     *
     * @return static
     *
     * @see 
     */
    public function creditedTo($creditedTo)
    {
        return $this->setProperty('creditedTo', $creditedTo);
    }

    /**
     * The label that issued the release.
     *
     * @param Organization|Organization[] $recordLabel
     *
     * @return static
     *
     * @see 
     */
    public function recordLabel($recordLabel)
    {
        return $this->setProperty('recordLabel', $recordLabel);
    }

    /**
     * The catalog number for the release.
     *
     * @param string|string[] $catalogNumber
     *
     * @return static
     *
     * @see 
     */
    public function catalogNumber($catalogNumber)
    {
        return $this->setProperty('catalogNumber', $catalogNumber);
    }

    /**
     * Format of this release (the type of recording media used, ie. compact
     * disc, digital media, LP, etc.).
     *
     * @param MusicReleaseFormatType|MusicReleaseFormatType[] $musicReleaseFormat
     *
     * @return static
     *
     * @see 
     */
    public function musicReleaseFormat($musicReleaseFormat)
    {
        return $this->setProperty('musicReleaseFormat', $musicReleaseFormat);
    }

    /**
     * The album this is a release of.
     *
     * @param MusicAlbum|MusicAlbum[] $releaseOf
     *
     * @return static
     *
     * @see 
     */
    public function releaseOf($releaseOf)
    {
        return $this->setProperty('releaseOf', $releaseOf);
    }

}
