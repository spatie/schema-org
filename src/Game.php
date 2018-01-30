<?php

namespace Spatie\SchemaOrg;

/**
 * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which
 * players assume the role of characters in a fictional setting.
 *
 * @see 
 */
class Game extends CreativeWork
{
    /**
     * An item is an object within the game world that can be collected by a
     * player or, occasionally, a non-player character.
     *
     * @param Thing|Thing[] $gameItem
     *
     * @return static
     *
     * @see 
     */
    public function gameItem($gameItem)
    {
        return $this->setProperty('gameItem', $gameItem);
    }

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @param QuantitativeValue|QuantitativeValue[] $numberOfPlayers
     *
     * @return static
     *
     * @see 
     */
    public function numberOfPlayers($numberOfPlayers)
    {
        return $this->setProperty('numberOfPlayers', $numberOfPlayers);
    }

    /**
     * The task that a player-controlled character, or group of characters may
     * complete in order to gain a reward.
     *
     * @param Thing|Thing[] $quest
     *
     * @return static
     *
     * @see 
     */
    public function quest($quest)
    {
        return $this->setProperty('quest', $quest);
    }

    /**
     * A piece of data that represents a particular aspect of a fictional
     * character (skill, power, character points, advantage, disadvantage).
     *
     * @param Thing|Thing[] $characterAttribute
     *
     * @return static
     *
     * @see 
     */
    public function characterAttribute($characterAttribute)
    {
        return $this->setProperty('characterAttribute', $characterAttribute);
    }

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @param string|string[]|Place|Place[]|PostalAddress|PostalAddress[] $gameLocation
     *
     * @return static
     *
     * @see 
     */
    public function gameLocation($gameLocation)
    {
        return $this->setProperty('gameLocation', $gameLocation);
    }

}
