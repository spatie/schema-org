<?php

namespace Spatie\SchemaOrg;

/**
 * A media object, such as an image, video, or audio object embedded in a web
 * page or a downloadable dataset i.e. DataDownload. Note that a creative work
 * may have many media objects associated with it on the same web page. For
 * example, a page about a single song (MusicRecording) may have a music video
 * (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see http://schema.org/MediaObject
 */
class MediaObject extends CreativeWork
{
    /**
     * A NewsArticle associated with the Media Object.
     *
     * @param \Spatie\SchemaOrg\NewsArticle $associatedArticle
     *
     * @return static
     *
     * @see http://schema.org/associatedArticle
     */
    public function associatedArticle($associatedArticle)
    {
        return $this->setProperty('associatedArticle', $associatedArticle);
    }

    /**
     * The bitrate of the media object.
     *
     * @param string $bitrate
     *
     * @return static
     *
     * @see http://schema.org/bitrate
     */
    public function bitrate($bitrate)
    {
        return $this->setProperty('bitrate', $bitrate);
    }

    /**
     * File size in (mega/kilo) bytes.
     *
     * @param string $contentSize
     *
     * @return static
     *
     * @see http://schema.org/contentSize
     */
    public function contentSize($contentSize)
    {
        return $this->setProperty('contentSize', $contentSize);
    }

    /**
     * Actual bytes of the media object, for example the image file or video
     * file.
     *
     * @param string $contentUrl
     *
     * @return static
     *
     * @see http://schema.org/contentUrl
     */
    public function contentUrl($contentUrl)
    {
        return $this->setProperty('contentUrl', $contentUrl);
    }

    /**
     * The duration of the item (movie, audio recording, event, etc.) in [ISO
     * 8601 date format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param \Spatie\SchemaOrg\Duration $duration
     *
     * @return static
     *
     * @see http://schema.org/duration
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
     * @param string $embedUrl
     *
     * @return static
     *
     * @see http://schema.org/embedUrl
     */
    public function embedUrl($embedUrl)
    {
        return $this->setProperty('embedUrl', $embedUrl);
    }

    /**
     * The CreativeWork encoded by this media object.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $encodesCreativeWork
     *
     * @return static
     *
     * @see http://schema.org/encodesCreativeWork
     */
    public function encodesCreativeWork($encodesCreativeWork)
    {
        return $this->setProperty('encodesCreativeWork', $encodesCreativeWork);
    }

    /**
     * mp3, mpeg4, etc.
     *
     * @param string $encodingFormat
     *
     * @return static
     *
     * @see http://schema.org/encodingFormat
     */
    public function encodingFormat($encodingFormat)
    {
        return $this->setProperty('encodingFormat', $encodingFormat);
    }

    /**
     * Date the content expires and is no longer useful or available. Useful for
     * videos.
     *
     * @param \DateTimeInterface $expires
     *
     * @return static
     *
     * @see http://schema.org/expires
     */
    public function expires($expires)
    {
        return $this->setProperty('expires', $expires);
    }

    /**
     * The height of the item.
     *
     * @param \Spatie\SchemaOrg\Distance|\Spatie\SchemaOrg\QuantitativeValue $height
     *
     * @return static
     *
     * @see http://schema.org/height
     */
    public function height($height)
    {
        return $this->setProperty('height', $height);
    }

    /**
     * Player type required&#x2014;for example, Flash or Silverlight.
     *
     * @param string $playerType
     *
     * @return static
     *
     * @see http://schema.org/playerType
     */
    public function playerType($playerType)
    {
        return $this->setProperty('playerType', $playerType);
    }

    /**
     * The production company or studio responsible for the item e.g. series,
     * video game, episode etc.
     *
     * @param \Spatie\SchemaOrg\Organization $productionCompany
     *
     * @return static
     *
     * @see http://schema.org/productionCompany
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
     * @param bool $requiresSubscription
     *
     * @return static
     *
     * @see http://schema.org/requiresSubscription
     */
    public function requiresSubscription($requiresSubscription)
    {
        return $this->setProperty('requiresSubscription', $requiresSubscription);
    }

    /**
     * Date when this media object was uploaded to this site.
     *
     * @param \DateTimeInterface $uploadDate
     *
     * @return static
     *
     * @see http://schema.org/uploadDate
     */
    public function uploadDate($uploadDate)
    {
        return $this->setProperty('uploadDate', $uploadDate);
    }

    /**
     * The width of the item.
     *
     * @param \Spatie\SchemaOrg\Distance|\Spatie\SchemaOrg\QuantitativeValue $width
     *
     * @return static
     *
     * @see http://schema.org/width
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
     * @param \Spatie\SchemaOrg\Place $regionsAllowed
     *
     * @return static
     *
     * @see http://schema.org/regionsAllowed
     */
    public function regionsAllowed($regionsAllowed)
    {
        return $this->setProperty('regionsAllowed', $regionsAllowed);
    }

}
