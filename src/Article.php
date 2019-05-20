<?php

namespace Spatie\SchemaOrg;

/**
 * An article, such as a news article or piece of investigative report.
 * Newspapers and magazines have articles of many different types and this is
 * intended to cover them all.
 * 
 * See also [blog
 * post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/Article
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Article extends BaseType
{
    /**
     * The actual body of the article.
     *
     * @param string|string[] $articleBody
     *
     * @return static
     *
     * @see http://schema.org/articleBody
     */
    public function articleBody($articleBody)
    {
        return $this->setProperty('articleBody', $articleBody);
    }

    /**
     * Articles may belong to one or more 'sections' in a magazine or newspaper,
     * such as Sports, Lifestyle, etc.
     *
     * @param string|string[] $articleSection
     *
     * @return static
     *
     * @see http://schema.org/articleSection
     */
    public function articleSection($articleSection)
    {
        return $this->setProperty('articleSection', $articleSection);
    }

    /**
     * The page on which the work ends; for example "138" or "xvi".
     *
     * @param int|int[]|string|string[] $pageEnd
     *
     * @return static
     *
     * @see http://schema.org/pageEnd
     */
    public function pageEnd($pageEnd)
    {
        return $this->setProperty('pageEnd', $pageEnd);
    }

    /**
     * The page on which the work starts; for example "135" or "xiii".
     *
     * @param int|int[]|string|string[] $pageStart
     *
     * @return static
     *
     * @see http://schema.org/pageStart
     */
    public function pageStart($pageStart)
    {
        return $this->setProperty('pageStart', $pageStart);
    }

    /**
     * Any description of pages that is not separated into pageStart and
     * pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
     *
     * @param string|string[] $pagination
     *
     * @return static
     *
     * @see http://schema.org/pagination
     */
    public function pagination($pagination)
    {
        return $this->setProperty('pagination', $pagination);
    }

    /**
     * Indicates sections of a Web page that are particularly 'speakable' in the
     * sense of being highlighted as being especially appropriate for
     * text-to-speech conversion. Other sections of a page may also be usefully
     * spoken in particular circumstances; the 'speakable' property serves to
     * indicate the parts most likely to be generally useful for speech.
     * 
     * The *speakable* property can be repeated an arbitrary number of times,
     * with three kinds of possible 'content-locator' values:
     * 
     * 1.) *id-value* URL references - uses *id-value* of an element in the page
     * being annotated. The simplest use of *speakable* has (potentially
     * relative) URL values, referencing identified sections of the document
     * concerned.
     * 
     * 2.) CSS Selectors - addresses content in the annotated page, eg. via
     * class attribute. Use the [[cssSelector]] property.
     * 
     * 3.)  XPaths - addresses content via XPaths (assuming an XML view of the
     * content). Use the [[xpath]] property.
     * 
     * 
     * For more sophisticated markup of speakable sections beyond simple ID
     * references, either CSS selectors or XPath expressions to pick out
     * document section(s) as speakable. For this
     * we define a supporting type, [[SpeakableSpecification]]  which is defined
     * to be a possible value of the *speakable* property.
     *
     * @param SpeakableSpecification|SpeakableSpecification[]|string|string[] $speakable
     *
     * @return static
     *
     * @see http://schema.org/speakable
     */
    public function speakable($speakable)
    {
        return $this->setProperty('speakable', $speakable);
    }

    /**
     * The number of words in the text of the Article.
     *
     * @param int|int[] $wordCount
     *
     * @return static
     *
     * @see http://schema.org/wordCount
     */
    public function wordCount($wordCount)
    {
        return $this->setProperty('wordCount', $wordCount);
    }

}
