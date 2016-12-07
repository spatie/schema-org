<?php

namespace Spatie\SchemaOrg;

/**
 * A screening of a movie or other video.
 *
 * @see http://schema.org/ScreeningEvent
 */
class ScreeningEvent extends Event
{
    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD,
     * etc.).
     *
     * @param string $videoFormat
     *
     * @return static
     *
     * @see http://schema.org/videoFormat
     */
    public function videoFormat($videoFormat)
    {
        return $this->setProperty('videoFormat', $videoFormat);
    }

    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47
     * standard format](http://tools.ietf.org/html/bcp47).
     *
     * @param string|\Spatie\SchemaOrg\Language $subtitleLanguage
     *
     * @return static
     *
     * @see http://schema.org/subtitleLanguage
     */
    public function subtitleLanguage($subtitleLanguage)
    {
        return $this->setProperty('subtitleLanguage', $subtitleLanguage);
    }

    /**
     * The movie presented during this event.
     *
     * @param \Spatie\SchemaOrg\Movie $workPresented
     *
     * @return static
     *
     * @see http://schema.org/workPresented
     */
    public function workPresented($workPresented)
    {
        return $this->setProperty('workPresented', $workPresented);
    }

}
