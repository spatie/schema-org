<?php

namespace Spatie\SchemaOrg;

/**
 * A media object, such as an image, video, or audio object embedded in a web
 * page or a downloadable dataset i.e. DataDownload. Note that a creative work
 * may have many media objects associated with it on the same web page. For
 * example, a page about a single song (MusicRecording) may have a music video
 * (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see 
 */
class MediaObject extends CreativeWork
{
    /**
     * The bitrate of the media object.
     *
     * @param string|string[] $bitrate
     *
     * @return static
     *
     * @see 
     */
    public function bitrate($bitrate)
    {
        return $this->setProperty('bitrate', $bitrate);
    }

    /**
     * A NewsArticle associated with the Media Object.
     *
     * @param NewsArticle|NewsArticle[] $associatedArticle
     *
     * @return static
     *
     * @see 
     */
    public function associatedArticle($associatedArticle)
    {
        return $this->setProperty('associatedArticle', $associatedArticle);
    }

    /**
     * Actual bytes of the media object, for example the image file or video
     * file.
     *
     * @param string|string[] $contentUrl
     *
     * @return static
     *
     * @see 
     */
    public function contentUrl($contentUrl)
    {
        return $this->setProperty('contentUrl', $contentUrl);
    }

    /**
     * File size in (mega/kilo) bytes.
     *
     * @param string|string[] $contentSize
     *
     * @return static
     *
     * @see 
     */
    public function contentSize($contentSize)
    {
        return $this->setProperty('contentSize', $contentSize);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $duration
     *
     * @return static
     *
     * @see 
     */
    public function duration($duration)
    {
        return $this->setProperty('duration', $duration);
    }

    /**
     * A URL pointing to a player for a specific video. In general, this is the
     * information in the ```src``` element of an ```embed``` tag and should not
     * be the same as the content of the ```loc``` tag.
     *
     * @param string|string[] $embedUrl
     *
     * @return static
     *
     * @see 
     */
    public function embedUrl($embedUrl)
    {
        return $this->setProperty('embedUrl', $embedUrl);
    }

    /**
     * The CreativeWork encoded by this media object.
     *
     * @param CreativeWork|CreativeWork[] $encodesCreativeWork
     *
     * @return static
     *
     * @see 
     */
    public function encodesCreativeWork($encodesCreativeWork)
    {
        return $this->setProperty('encodesCreativeWork', $encodesCreativeWork);
    }

    /**
     * mp3, mpeg4, etc.
     *
     * @param string|string[] $encodingFormat
     *
     * @return static
     *
     * @see 
     */
    public function encodingFormat($encodingFormat)
    {
        return $this->setProperty('encodingFormat', $encodingFormat);
    }

    /**
     * Date the content expires and is no longer useful or available. Useful for
     * videos.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $expires
     *
     * @return static
     *
     * @see 
     */
    public function expires($expires)
    {
        return $this->setProperty('expires', $expires);
    }

    /**
     * The height of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $height
     *
     * @return static
     *
     * @see 
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     * @param string|string[] $playerType
     *
     * @return static
     *
     * @see 
     */
    public function playerType($playerType)
    {
        return $this->setProperty('playerType', $playerType);
    }

    /**
     * The production company or studio responsible for the item e.g. series,
     * video game, episode etc.
     *
     * @param Organization|Organization[] $productionCompany
     *
     * @return static
     *
     * @see 
     */
    public function productionCompany($productionCompany)
    {
        return $this->setProperty('productionCompany', $productionCompany);
    }

    /**
     * Indicates if use of the media require a subscription  (either paid or
     * free). Allowed values are ```true``` or ```false``` (note that an earlier
     * version had 'yes', 'no').
     *
     * @param bool|bool[] $requiresSubscription
     *
     * @return static
     *
     * @see 
     */
    public function requiresSubscription($requiresSubscription)
    {
        return $this->setProperty('requiresSubscription', $requiresSubscription);
    }

    /**
     * Date when this media object was uploaded to this site.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $uploadDate
     *
     * @return static
     *
     * @see 
     */
    public function uploadDate($uploadDate)
    {
        return $this->setProperty('uploadDate', $uploadDate);
    }

    /**
     * The width of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $width
     *
     * @return static
     *
     * @see 
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

    /**
     * The regions where the media is allowed. If not specified, then it's
     * assumed to be allowed everywhere. Specify the countries in [ISO 3166
     * format](http://en.wikipedia.org/wiki/ISO_3166).
     *
     * @param Place|Place[] $regionsAllowed
     *
     * @return static
     *
     * @see 
     */
    public function regionsAllowed($regionsAllowed)
    {
        return $this->setProperty('regionsAllowed', $regionsAllowed);
    }

}
