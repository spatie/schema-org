<?php

namespace Spatie\SchemaOrg;

/**
 * The act of authoring written creative content.
 *
 * @see http://schema.org/WriteAction
 */
class WriteAction extends CreateAction
{
    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param string|\Spatie\SchemaOrg\Language $inLanguage
     *
     * @return static
     *
     * @see http://schema.org/inLanguage
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * A sub property of instrument. The language used on this action.
     *
     * @param \Spatie\SchemaOrg\Language $language
     *
     * @return static
     *
     * @see http://schema.org/language
     */
    public function language($language)
    {
        return $this->setProperty('language', $language);
    }

}
