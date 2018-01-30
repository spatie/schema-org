<?php

namespace Spatie\SchemaOrg;

/**
 * The act of authoring written creative content.
 *
 * @see 
 */
class WriteAction extends CreateAction
{
    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param string|string[]|Language|Language[] $inLanguage
     *
     * @return static
     *
     * @see 
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * A sub property of instrument. The language used on this action.
     *
     * @param Language|Language[] $language
     *
     * @return static
     *
     * @see 
     */
    public function language($language)
    {
        return $this->setProperty('language', $language);
    }

}
