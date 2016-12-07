<?php

namespace Spatie\SchemaOrg;

/**
 * A MusicRelease is a specific release of a music album.
 *
 * @see http://schema.org/MusicRelease
 */
class MusicRelease extends MusicPlaylist
{
    /**
     * The catalog number for the release.
     *
     * @param string $catalogNumber
     *
     * @return static
     *
     * @see http://schema.org/catalogNumber
     */
    public function catalogNumber($catalogNumber)
    {
        return $this->setProperty('catalogNumber', $catalogNumber);
    }

    /**
     * The group the release is credited to if different than the byArtist. For
     * example, Red and Blue is credited to "Stefani Germanotta Band", but by
     * Lady Gaga.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $creditedTo
     *
     * @return static
     *
     * @see http://schema.org/creditedTo
     */
    public function creditedTo($creditedTo)
    {
        return $this->setProperty('creditedTo', $creditedTo);
    }

    /**
     * Format of this release (the type of recording media used, ie. compact
     * disc, digital media, LP, etc.).
     *
     * @param \Spatie\SchemaOrg\MusicReleaseFormatType $musicReleaseFormat
     *
     * @return static
     *
     * @see http://schema.org/musicReleaseFormat
     */
    public function musicReleaseFormat($musicReleaseFormat)
    {
        return $this->setProperty('musicReleaseFormat', $musicReleaseFormat);
    }

    /**
     * The label that issued the release.
     *
     * @param \Spatie\SchemaOrg\Organization $recordLabel
     *
     * @return static
     *
     * @see http://schema.org/recordLabel
     */
    public function recordLabel($recordLabel)
    {
        return $this->setProperty('recordLabel', $recordLabel);
    }

    /**
     * The album this is a release of.
     *
     * @param \Spatie\SchemaOrg\MusicAlbum $releaseOf
     *
     * @return static
     *
     * @see http://schema.org/releaseOf
     */
    public function releaseOf($releaseOf)
    {
        return $this->setProperty('releaseOf', $releaseOf);
    }

}
