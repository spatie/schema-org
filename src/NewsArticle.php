<?php

namespace Spatie\SchemaOrg;

/**
 * A news article.
 *
 * @see http://schema.org/NewsArticle
 */
class NewsArticle extends Article
{
    /**
     * The location where the NewsArticle was produced.
     *
     * @param string $dateline
     *
     * @return static
     *
     * @see http://schema.org/dateline
     */
    public function dateline($dateline)
    {
        return $this->setProperty('dateline', $dateline);
    }

    /**
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     *
     * @param string $printColumn
     *
     * @return static
     *
     * @see http://schema.org/printColumn
     */
    public function printColumn($printColumn)
    {
        return $this->setProperty('printColumn', $printColumn);
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @param string $printEdition
     *
     * @return static
     *
     * @see http://schema.org/printEdition
     */
    public function printEdition($printEdition)
    {
        return $this->setProperty('printEdition', $printEdition);
    }

    /**
     * If this NewsArticle appears in print, this field indicates the name of
     * the page on which the article is found. Please note that this field is
     * intended for the exact page name (e.g. A5, B18).
     *
     * @param string $printPage
     *
     * @return static
     *
     * @see http://schema.org/printPage
     */
    public function printPage($printPage)
    {
        return $this->setProperty('printPage', $printPage);
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     *
     * @param string $printSection
     *
     * @return static
     *
     * @see http://schema.org/printSection
     */
    public function printSection($printSection)
    {
        return $this->setProperty('printSection', $printSection);
    }

}
