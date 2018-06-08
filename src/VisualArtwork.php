<?php

namespace Spatie\SchemaOrg;

/**
 * A work of art that is primarily visual in character.
 *
 * @see http://schema.org/VisualArtwork
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class VisualArtwork extends BaseType
{
    /**
     * The number of copies when multiple copies of a piece of artwork are
     * produced - e.g. for a limited edition of 20 prints, 'artEdition' refers
     * to the total number of copies (in this example "20").
     *
     * @param int|int[]|string|string[] $artEdition
     *
     * @return static
     *
     * @see http://schema.org/artEdition
     */
    public function artEdition($artEdition)
    {
        return $this->setProperty('artEdition', $artEdition);
    }

    /**
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
     * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut,
     * Pencil, Mixed Media, etc.)
     *
     * @param string|string[] $artMedium
     *
     * @return static
     *
     * @see http://schema.org/artMedium
     */
    public function artMedium($artMedium)
    {
        return $this->setProperty('artMedium', $artMedium);
    }

    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage,
     * Collage, etc.
     *
     * @param string|string[] $artform
     *
     * @return static
     *
     * @see http://schema.org/artform
     */
    public function artform($artform)
    {
        return $this->setProperty('artform', $artform);
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood,
     * Board, etc.
     *
     * @param string|string[] $artworkSurface
     *
     * @return static
     *
     * @see http://schema.org/artworkSurface
     */
    public function artworkSurface($artworkSurface)
    {
        return $this->setProperty('artworkSurface', $artworkSurface);
    }

    /**
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood,
     * Board, etc.
     *
     * @param string|string[] $surface
     *
     * @return static
     *
     * @see http://schema.org/surface
     */
    public function surface($surface)
    {
        return $this->setProperty('surface', $surface);
    }

}
