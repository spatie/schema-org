<?php

namespace Spatie\SchemaOrg;

/**
 * A news article.
 *
 * @see 
 */
class NewsArticle extends Article
{
    /**
     * The location where the NewsArticle was produced.
     *
     * @param string|string[] $dateline
     *
     * @return static
     *
     * @see 
     */
    public function dateline($dateline)
    {
        return $this->setProperty('dateline', $dateline);
    }

    /**
     * The number of the column in which the NewsArticle appears in the print
     * edition.
     *
     * @param string|string[] $printColumn
     *
     * @return static
     *
     * @see 
     */
    public function printColumn($printColumn)
    {
        return $this->setProperty('printColumn', $printColumn);
    }

    /**
     * The edition of the print product in which the NewsArticle appears.
     *
     * @param string|string[] $printEdition
     *
     * @return static
     *
     * @see 
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
     * @param string|string[] $printPage
     *
     * @return static
     *
     * @see 
     */
    public function printPage($printPage)
    {
        return $this->setProperty('printPage', $printPage);
    }

    /**
     * If this NewsArticle appears in print, this field indicates the print
     * section in which the article appeared.
     *
     * @param string|string[] $printSection
     *
     * @return static
     *
     * @see 
     */
    public function printSection($printSection)
    {
        return $this->setProperty('printSection', $printSection);
    }

}
