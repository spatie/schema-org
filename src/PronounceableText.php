<?php

namespace Spatie\SchemaOrg;

use Spatie\SchemaOrg\Contracts\PronounceableTextContract;

/**
 * Data type: PronounceableText.
 *
 * @see https://schema.org/PronounceableText
 * @see https://pending.schema.org
 * @link https://github.com/schemaorg/schemaorg/issues/2108
 *
 */
class PronounceableText extends BaseType implements PronounceableTextContract
{
    /**
     * The language of the content or performance or used in an action. Please
     * use one of the language codes from the [IETF BCP 47
     * standard](http://tools.ietf.org/html/bcp47). See also
     * [[availableLanguage]].
     *
     * @param \Spatie\SchemaOrg\Contracts\LanguageContract|\Spatie\SchemaOrg\Contracts\LanguageContract[]|string|string[] $inLanguage
     *
     * @return static
     *
     * @see https://schema.org/inLanguage
     * @link https://github.com/schemaorg/schemaorg/issues/2382
     */
    public function inLanguage($inLanguage)
    {
        return $this->setProperty('inLanguage', $inLanguage);
    }

    /**
     * Representation of a text [[textValue]] using the specified
     * [[speechToTextMarkup]]. For example the city name of Houston in IPA:
     * /ˈhjuːstən/.
     *
     * @param string|string[] $phoneticText
     *
     * @return static
     *
     * @see https://schema.org/phoneticText
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2108
     */
    public function phoneticText($phoneticText)
    {
        return $this->setProperty('phoneticText', $phoneticText);
    }

    /**
     * Form of markup used. eg. [SSML](https://www.w3.org/TR/speech-synthesis11)
     * or [IPA](https://www.wikidata.org/wiki/Property:P898).
     *
     * @param string|string[] $speechToTextMarkup
     *
     * @return static
     *
     * @see https://schema.org/speechToTextMarkup
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2108
     */
    public function speechToTextMarkup($speechToTextMarkup)
    {
        return $this->setProperty('speechToTextMarkup', $speechToTextMarkup);
    }

    /**
     * Text value being annotated.
     *
     * @param string|string[] $textValue
     *
     * @return static
     *
     * @see https://schema.org/textValue
     * @see https://pending.schema.org
     * @link https://github.com/schemaorg/schemaorg/issues/2108
     */
    public function textValue($textValue)
    {
        return $this->setProperty('textValue', $textValue);
    }
}
