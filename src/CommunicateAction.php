<?php

namespace Spatie\SchemaOrg;

/**
 * The act of conveying information to another person via a communication medium
 * (instrument) such as speech, email, or telephone conversation.
 *
 * @see http://schema.org/CommunicateAction
 *
 * @mixin \Spatie\SchemaOrg\InteractAction
 */
class CommunicateAction extends BaseType
{
    /**
     * The subject matter of the content.
     *
     * @param Thing|Thing[] $about
     *
     * @return static
     *
     * @see http://schema.org/about
     */
    public function about($about)
    {
        return $this->setProperty('about', $about);
    }

    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param Language|Language[]|string|string[] $inLanguage
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
     * @param Language|Language[] $language
     *
     * @return static
     *
     * @see http://schema.org/language
     */
    public function language($language)
    {
        return $this->setProperty('language', $language);
    }

    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param Audience|Audience[]|ContactPoint|ContactPoint[]|Organization|Organization[]|Person|Person[] $recipient
     *
     * @return static
     *
     * @see http://schema.org/recipient
     */
    public function recipient($recipient)
    {
        return $this->setProperty('recipient', $recipient);
    }

}
