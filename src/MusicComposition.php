<?php

namespace Spatie\SchemaOrg;

/**
 * A musical composition.
 *
 * @see http://schema.org/MusicComposition
 */
class MusicComposition extends CreativeWork
{
    /**
     * An arrangement derived from the composition.
     *
     * @param \Spatie\SchemaOrg\MusicComposition $musicArrangement
     *
     * @return static
     *
     * @see http://schema.org/musicArrangement
     */
    public function musicArrangement($musicArrangement)
    {
        return $this->setProperty('musicArrangement', $musicArrangement);
    }

    /**
     * The person or organization who wrote a composition, or who is the
     * composer of a work performed at some event.
     *
     * @param \Spatie\SchemaOrg\Person|\Spatie\SchemaOrg\Organization $composer
     *
     * @return static
     *
     * @see http://schema.org/composer
     */
    public function composer($composer)
    {
        return $this->setProperty('composer', $composer);
    }

    /**
     * The date and place the work was first performed.
     *
     * @param \Spatie\SchemaOrg\Event $firstPerformance
     *
     * @return static
     *
     * @see http://schema.org/firstPerformance
     */
    public function firstPerformance($firstPerformance)
    {
        return $this->setProperty('firstPerformance', $firstPerformance);
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a
     * symphony).
     *
     * @param \Spatie\SchemaOrg\MusicComposition $includedComposition
     *
     * @return static
     *
     * @see http://schema.org/includedComposition
     */
    public function includedComposition($includedComposition)
    {
        return $this->setProperty('includedComposition', $includedComposition);
    }

    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @param string $iswcCode
     *
     * @return static
     *
     * @see http://schema.org/iswcCode
     */
    public function iswcCode($iswcCode)
    {
        return $this->setProperty('iswcCode', $iswcCode);
    }

    /**
     * The person who wrote the words.
     *
     * @param \Spatie\SchemaOrg\Person $lyricist
     *
     * @return static
     *
     * @see http://schema.org/lyricist
     */
    public function lyricist($lyricist)
    {
        return $this->setProperty('lyricist', $lyricist);
    }

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @param string $musicCompositionForm
     *
     * @return static
     *
     * @see http://schema.org/musicCompositionForm
     */
    public function musicCompositionForm($musicCompositionForm)
    {
        return $this->setProperty('musicCompositionForm', $musicCompositionForm);
    }

    /**
     * The key, mode, or scale this composition uses.
     *
     * @param string $musicalKey
     *
     * @return static
     *
     * @see http://schema.org/musicalKey
     */
    public function musicalKey($musicalKey)
    {
        return $this->setProperty('musicalKey', $musicalKey);
    }

    /**
     * An audio recording of the work.
     *
     * @param \Spatie\SchemaOrg\MusicRecording $recordedAs
     *
     * @return static
     *
     * @see http://schema.org/recordedAs
     */
    public function recordedAs($recordedAs)
    {
        return $this->setProperty('recordedAs', $recordedAs);
    }

    /**
     * The words in the song.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $lyrics
     *
     * @return static
     *
     * @see http://schema.org/lyrics
     */
    public function lyrics($lyrics)
    {
        return $this->setProperty('lyrics', $lyrics);
    }

}
