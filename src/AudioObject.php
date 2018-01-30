<?php

namespace Spatie\SchemaOrg;

/**
 * An audio file.
 *
 * @see 
 */
class AudioObject extends MediaObject
{
    /**
     * If this MediaObject is an AudioObject or VideoObject, the transcript of
     * that object.
     *
     * @param string|string[] $transcript
     *
     * @return static
     *
     * @see 
     */
    public function transcript($transcript)
    {
        return $this->setProperty('transcript', $transcript);
    }

}
