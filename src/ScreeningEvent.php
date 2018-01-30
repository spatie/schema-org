<?php

namespace Spatie\SchemaOrg;

/**
 * A screening of a movie or other video.
 *
 * @see 
 */
class ScreeningEvent extends Event
{
    /**
     * Languages in which subtitles/captions are available, in [IETF BCP 47
     * standard format](http://tools.ietf.org/html/bcp47).
     *
     * @param string|string[]|Language|Language[] $subtitleLanguage
     *
     * @return static
     *
     * @see 
     */
    public function subtitleLanguage($subtitleLanguage)
    {
        return $this->setProperty('subtitleLanguage', $subtitleLanguage);
    }

    /**
     * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD,
     * etc.).
     *
     * @param string|string[] $videoFormat
     *
     * @return static
     *
     * @see 
     */
    public function videoFormat($videoFormat)
    {
        return $this->setProperty('videoFormat', $videoFormat);
    }

    /**
     * The movie presented during this event.
     *
     * @param Movie|Movie[] $workPresented
     *
     * @return static
     *
     * @see 
     */
    public function workPresented($workPresented)
    {
        return $this->setProperty('workPresented', $workPresented);
    }

}
