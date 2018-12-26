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
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class MediaObject extends BaseType
{
    /**
     * A NewsArticle associated with the Media Object.
     *
     * @param NewsArticle|NewsArticle[] $associatedArticle
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
     * @param string|string[] $bitrate
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
     * @param string|string[] $contentSize
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
     * @param string|string[] $contentUrl
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
     * @param Duration|Duration[] $duration
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
     * @param string|string[] $embedUrl
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
     * @param CreativeWork|CreativeWork[] $encodesCreativeWork
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
     * Media type typically expressed using a MIME format (see [IANA
     * site](http://www.iana.org/assignments/media-types/media-types.xhtml) and
     * [MDN
     * reference](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/MIME_types))
     * e.g. application/zip for a SoftwareApplication binary, audio/mpeg for
     * .mp3 etc.).
     * 
     * In cases where a [[CreativeWork]] has several media type representations,
     * [[encoding]] can be used to indicate each [[MediaObject]] alongside
     * particular [[encodingFormat]] information.
     * 
     * Unregistered or niche encoding and file formats can be indicated instead
     * via the most appropriate URL, e.g. defining Web page or a
     * Wikipedia/Wikidata entry.
     *
     * @param string|string[] $encodingFormat
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
     * The endTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to end. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from January to *December*. For media, including audio
     * and video, it's the time offset of the end of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $endTime
     *
     * @return static
     *
     * @see http://schema.org/endTime
     */
    public function endTime($endTime)
    {
        return $this->setProperty('endTime', $endTime);
    }

    /**
     * The height of the item.
     *
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $height
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
     * @param string|string[] $playerType
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
     * @param Organization|Organization[] $productionCompany
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
     * The regions where the media is allowed. If not specified, then it's
     * assumed to be allowed everywhere. Specify the countries in [ISO 3166
     * format](http://en.wikipedia.org/wiki/ISO_3166).
     *
     * @param Place|Place[] $regionsAllowed
     *
     * @return static
     *
     * @see http://schema.org/regionsAllowed
     */
    public function regionsAllowed($regionsAllowed)
    {
        return $this->setProperty('regionsAllowed', $regionsAllowed);
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
     * @see http://schema.org/requiresSubscription
     */
    public function requiresSubscription($requiresSubscription)
    {
        return $this->setProperty('requiresSubscription', $requiresSubscription);
    }

    /**
     * The startTime of something. For a reserved event or service (e.g.
     * FoodEstablishmentReservation), the time that it is expected to start. For
     * actions that span a period of time, when the action was performed. e.g.
     * John wrote a book from *January* to December. For media, including audio
     * and video, it's the time offset of the start of a clip within a larger
     * file.
     * 
     * Note that Event uses startDate/endDate instead of startTime/endTime, even
     * when describing dates with times. This situation may be clarified in
     * future revisions.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $startTime
     *
     * @return static
     *
     * @see http://schema.org/startTime
     */
    public function startTime($startTime)
    {
        return $this->setProperty('startTime', $startTime);
    }

    /**
     * Date when this media object was uploaded to this site.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $uploadDate
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
     * @param Distance|Distance[]|QuantitativeValue|QuantitativeValue[] $width
     *
     * @return static
     *
     * @see http://schema.org/width
     */
    public function width($width)
    {
        return $this->setProperty('width', $width);
    }

}
