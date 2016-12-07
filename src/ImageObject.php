<?php

namespace Spatie\SchemaOrg;

/**
 * An image file.
 *
 * @see http://schema.org/ImageObject
 */
class ImageObject extends MediaObject
{
    /**
     * The caption for this object.
     *
     * @param string $caption
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
     * @param string|\Spatie\SchemaOrg\PropertyValue $exifData
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
     * @param bool $representativeOfPage
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
     * @param \Spatie\SchemaOrg\ImageObject $thumbnail
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
