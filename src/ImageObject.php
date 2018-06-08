<?php

namespace Spatie\SchemaOrg;

/**
 * An image file.
 *
 * @see http://schema.org/ImageObject
 *
 * @mixin \Spatie\SchemaOrg\MediaObject
 */
class ImageObject extends BaseType
{
    /**
     * The caption for this object.
     *
     * @param string|string[] $caption
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
     * exif data for this object.
     *
     * @param PropertyValue|PropertyValue[]|string|string[] $exifData
     *
     * @return static
     *
     * @see http://schema.org/exifData
     */
    public function exifData($exifData)
    {
        return $this->setProperty('exifData', $exifData);
    }

    /**
     * Indicates whether this image is representative of the content of the
     * page.
     *
     * @param bool|bool[] $representativeOfPage
     *
     * @return static
     *
     * @see http://schema.org/representativeOfPage
     */
    public function representativeOfPage($representativeOfPage)
    {
        return $this->setProperty('representativeOfPage', $representativeOfPage);
    }

    /**
     * Thumbnail image for an image or video.
     *
     * @param ImageObject|ImageObject[] $thumbnail
     *
     * @return static
     *
     * @see http://schema.org/thumbnail
     */
    public function thumbnail($thumbnail)
    {
        return $this->setProperty('thumbnail', $thumbnail);
    }

}
