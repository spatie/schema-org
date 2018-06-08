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
