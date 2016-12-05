<?php

namespace Spatie\SchemaOrg;

/**
 * An audio file.
 *
 * @see http://schema.org/AudioObject
 */
class AudioObject extends MediaObject
{
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

}
