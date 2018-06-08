<?php

namespace Spatie\SchemaOrg;

/**
 * A NewsArticle is an article whose content reports news, or provides
 * background context and supporting materials for understanding the news.
 * 
 * A more detailed overview of [schema.org News markup](/docs/news.html) is also
 * available.
 *
 * @see http://schema.org/NewsArticle
 *
 * @mixin \Spatie\SchemaOrg\Article
 */
class NewsArticle extends BaseType
{
    /**
     * A [dateline](https://en.wikipedia.org/wiki/Dateline) is a brief piece of
     * text included in news articles that describes where and when the story
     * was written or filed though the date is often omitted. Sometimes only a
     * placename is provided.
     * 
     * Structured representations of dateline-related information can also be
     * expressed more explicitly using [[locationCreated]] (which represents
     * where a work was created e.g. where a news report was written).  For
     * location depicted or described in the content, use [[contentLocation]].
     * 
     * Dateline summaries are oriented more towards human readers than towards
     * automated processing, and can vary substantially. Some examples: "BEIRUT,
     * Lebanon, June 2.", "Paris, France", "December 19, 2017 11:43AM Reporting
     * from Washington", "Beijing/Moscow", "QUEZON CITY, Philippines".
     *
     * @param string|string[] $dateline
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
     * @param string|string[] $printColumn
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
     * @param string|string[] $printEdition
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
     * @param string|string[] $printPage
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
     * @param string|string[] $printSection
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
