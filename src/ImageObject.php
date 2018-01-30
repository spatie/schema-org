<?php

namespace Spatie\SchemaOrg;

/**
 * An image file.
 *
 * @see 
 */
class ImageObject extends MediaObject
{
    /**
     * The caption for this object.
     *
     * @param string|string[] $caption
     *
     * @return static
     *
     * @see 
     */
    public function caption($caption)
    {
        return $this->setProperty('caption', $caption);
    }

    /**
     * exif data for this object.
     *
     * @param string|string[]|PropertyValue|PropertyValue[] $exifData
     *
     * @return static
     *
     * @see 
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
     * @see 
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
     * @see 
     */
    public function thumbnail($thumbnail)
    {
        return $this->setProperty('thumbnail', $thumbnail);
    }

}
