<?php

namespace Spatie\SchemaOrg;

/**
 * The Game type represents things which are games. These are typically
 * rule-governed recreational activities, e.g. role-playing games in which
 * players assume the role of characters in a fictional setting.
 *
 * @see http://schema.org/Game
 *
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class Game extends BaseType
{
    /**
     * A piece of data that represents a particular aspect of a fictional
     * character (skill, power, character points, advantage, disadvantage).
     *
     * @param Thing|Thing[] $characterAttribute
     *
     * @return static
     *
     * @see http://schema.org/characterAttribute
     */
    public function characterAttribute($characterAttribute)
    {
        return $this->setProperty('characterAttribute', $characterAttribute);
    }

    /**
     * An item is an object within the game world that can be collected by a
     * player or, occasionally, a non-player character.
     *
     * @param Thing|Thing[] $gameItem
     *
     * @return static
     *
     * @see http://schema.org/gameItem
     */
    public function gameItem($gameItem)
    {
        return $this->setProperty('gameItem', $gameItem);
    }

    /**
     * Real or fictional location of the game (or part of game).
     *
     * @param Place|Place[]|PostalAddress|PostalAddress[]|string|string[] $gameLocation
     *
     * @return static
     *
     * @see http://schema.org/gameLocation
     */
    public function gameLocation($gameLocation)
    {
        return $this->setProperty('gameLocation', $gameLocation);
    }

    /**
     * Indicate how many people can play this game (minimum, maximum, or range).
     *
     * @param QuantitativeValue|QuantitativeValue[] $numberOfPlayers
     *
     * @return static
     *
     * @see http://schema.org/numberOfPlayers
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
     * @see http://schema.org/quest
     */
    public function quest($quest)
    {
        return $this->setProperty('quest', $quest);
    }

}
