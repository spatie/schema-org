<?php

namespace Spatie\SchemaOrg;

/**
 * A video file.
 *
 * @see http://schema.org/VideoObject
 */
class VideoObject extends MediaObject
{
    /**
     * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
     * Actors can be associated with individual items or with a series, episode,
     * clip.
     *
     * @param \Spatie\SchemaOrg\Person $actor
     *
     * @return static
     *
     * @see http://schema.org/actor
     */
    public function actor($actor)
    {
        return $this->setProperty('actor', $actor);
    }

    /**
     * An actor, e.g. in tv, radio, movie, video games etc. Actors can be
     * associated with individual items or with a series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $actors
     *
     * @return static
     *
     * @see http://schema.org/actors
     */
    public function actors($actors)
    {
        return $this->setProperty('actors', $actors);
    }

    /**
     * The caption for this object.
     *
     * @param string $caption
     *
     * @return static
     *
     * @see http://schema.org/caption
     */
    public function caption($caption)
    {
        return $this->setProperty('caption', $caption);
    }

    /**
     * A director of e.g. tv, radio, movie, video gaming etc. content, or of an
     * event. Directors can be associated with individual items or with a
     * series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $director
     *
     * @return static
     *
     * @see http://schema.org/director
     */
    public function director($director)
    {
        return $this->setProperty('director', $director);
    }

    /**
     * A director of e.g. tv, radio, movie, video games etc. content. Directors
     * can be associated with individual items or with a series, episode, clip.
     *
     * @param \Spatie\SchemaOrg\Person $directors
     *
     * @return static
     *
     * @see http://schema.org/directors
     */
    public function directors($directors)
    {
        return $this->setProperty('directors', $directors);
    }

    /**
     * The composer of the soundtrack.
     *
     * @param \Spatie\SchemaOrg\MusicGroup|\Spatie\SchemaOrg\Person $musicBy
     *
     * @return static
     *
     * @see http://schema.org/musicBy
     */
    public function musicBy($musicBy)
    {
        return $this->setProperty('musicBy', $musicBy);
    }

    /**
     * Thumbnail image for an image or video.
     *
     * @param \Spatie\SchemaOrg\ImageObject $thumbnail
     *
     * @return static
     *
     * @see http://schema.org/thumbnail
     */
    public function thumbnail($thumbnail)
    {
        return $this->setProperty('thumbnail', $thumbnail);
    }

    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of
     * that object.
     *
     * @param string $transcript
     *
     * @return static
     *
     * @see http://schema.org/transcript
     */
    public function transcript($transcript)
    {
        return $this->setProperty('transcript', $transcript);
    }

    /**
     * The frame size of the video.
     *
     * @param string $videoFrameSize
     *
     * @return static
     *
     * @see http://schema.org/videoFrameSize
     */
    public function videoFrameSize($videoFrameSize)
    {
        return $this->setProperty('videoFrameSize', $videoFrameSize);
    }

    /**
     * The quality of the video.
     *
     * @param string $videoQuality
     *
     * @return static
     *
     * @see http://schema.org/videoQuality
     */
    public function videoQuality($videoQuality)
    {
        return $this->setProperty('videoQuality', $videoQuality);
    }

}
