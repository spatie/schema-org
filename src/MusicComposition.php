<?php

namespace Spatie\SchemaOrg;

/**
 * A musical composition.
 *
 * @see 
 */
class MusicComposition extends CreativeWork
{
    /**
     * The person or organization who wrote a composition, or who is the
     * composer of a work performed at some event.
     *
     * @param Person|Person[]|Organization|Organization[] $composer
     *
     * @return static
     *
     * @see 
     */
    public function composer($composer)
    {
        return $this->setProperty('composer', $composer);
    }

    /**
     * The date and place the work was first performed.
     *
     * @param Event|Event[] $firstPerformance
     *
     * @return static
     *
     * @see 
     */
    public function firstPerformance($firstPerformance)
    {
        return $this->setProperty('firstPerformance', $firstPerformance);
    }

    /**
     * Smaller compositions included in this work (e.g. a movement in a
     * symphony).
     *
     * @param MusicComposition|MusicComposition[] $includedComposition
     *
     * @return static
     *
     * @see 
     */
    public function includedComposition($includedComposition)
    {
        return $this->setProperty('includedComposition', $includedComposition);
    }

    /**
     * The International Standard Musical Work Code for the composition.
     *
     * @param string|string[] $iswcCode
     *
     * @return static
     *
     * @see 
     */
    public function iswcCode($iswcCode)
    {
        return $this->setProperty('iswcCode', $iswcCode);
    }

    /**
     * The person who wrote the words.
     *
     * @param Person|Person[] $lyricist
     *
     * @return static
     *
     * @see 
     */
    public function lyricist($lyricist)
    {
        return $this->setProperty('lyricist', $lyricist);
    }

    /**
     * The words in the song.
     *
     * @param CreativeWork|CreativeWork[] $lyrics
     *
     * @return static
     *
     * @see 
     */
    public function lyrics($lyrics)
    {
        return $this->setProperty('lyrics', $lyrics);
    }

    /**
     * An arrangement derived from the composition.
     *
     * @param MusicComposition|MusicComposition[] $musicArrangement
     *
     * @return static
     *
     * @see 
     */
    public function musicArrangement($musicArrangement)
    {
        return $this->setProperty('musicArrangement', $musicArrangement);
    }

    /**
     * The type of composition (e.g. overture, sonata, symphony, etc.).
     *
     * @param string|string[] $musicCompositionForm
     *
     * @return static
     *
     * @see 
     */
    public function musicCompositionForm($musicCompositionForm)
    {
        return $this->setProperty('musicCompositionForm', $musicCompositionForm);
    }

    /**
     * The key, mode, or scale this composition uses.
     *
     * @param string|string[] $musicalKey
     *
     * @return static
     *
     * @see 
     */
    public function musicalKey($musicalKey)
    {
        return $this->setProperty('musicalKey', $musicalKey);
    }

    /**
     * An audio recording of the work.
     *
     * @param MusicRecording|MusicRecording[] $recordedAs
     *
     * @return static
     *
     * @see 
     */
    public function recordedAs($recordedAs)
    {
        return $this->setProperty('recordedAs', $recordedAs);
    }

}
