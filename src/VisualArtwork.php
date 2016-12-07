<?php

namespace Spatie\SchemaOrg;

/**
 * A work of art that is primarily visual in character.
 *
 * @see http://schema.org/VisualArtwork
 */
class VisualArtwork extends CreativeWork
{
    /**
     * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage,
     * Collage, etc.
     *
     * @param string $artform
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
     * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble,
     * Cyanotype, Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut,
     * Pencil, Mixed Media, etc.)
     *
     * @param string $artMedium
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
     * A material used as a surface in some artwork, e.g. Canvas, Paper, Wood,
     * Board, etc.
     *
     * @param string $surface
     *
     * @return static
     *
     * @see http://schema.org/surface
     */
    public function surface($surface)
    {
        return $this->setProperty('surface', $surface);
    }

    /**
     * The supporting materials for the artwork, e.g. Canvas, Paper, Wood,
     * Board, etc.
     *
     * @param string $artworkSurface
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
     * The number of copies when multiple copies of a piece of artwork are
     * produced - e.g. for a limited edition of 20 prints, 'artEdition' refers
     * to the total number of copies (in this example "20").
     *
     * @param string|int $artEdition
     *
     * @return static
     *
     * @see http://schema.org/artEdition
     */
    public function artEdition($artEdition)
    {
        return $this->setProperty('artEdition', $artEdition);
    }

}
