<?php

namespace Spatie\SchemaOrg;

/**
 * An audio file.
 *
 * @see http://schema.org/AudioObject
 *
 * @mixin \Spatie\SchemaOrg\MediaObject
 */
class AudioObject extends BaseType
{
    /**
     * The caption for this object. For downloadable machine formats (closed
     * caption, subtitles etc.) use MediaObject and indicate the
     * [[encodingFormat]].
     *
     * @param MediaObject|MediaObject[]|string|string[] $caption
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
     * If this MediaObject is an AudioObject or VideoObject, the transcript of
     * that object.
     *
     * @param string|string[] $transcript
     *
     * @return static
     *
     * @see http://schema.org/transcript
     */
    public function transcript($transcript)
    {
        return $this->setProperty('transcript', $transcript);
    }

}
