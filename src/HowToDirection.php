<?php

namespace Spatie\SchemaOrg;

/**
 * A direction indicating a single action to do in the instructions for how to
 * achieve a result.
 *
 * @see http://schema.org/HowToDirection
 *
 * @mixin \Spatie\SchemaOrg\ListItem
 * @mixin \Spatie\SchemaOrg\CreativeWork
 */
class HowToDirection extends BaseType
{
    /**
     * A media object representing the circumstances after performing this
     * direction.
     *
     * @param MediaObject|MediaObject[]|string|string[] $afterMedia
     *
     * @return static
     *
     * @see http://schema.org/afterMedia
     */
    public function afterMedia($afterMedia)
    {
        return $this->setProperty('afterMedia', $afterMedia);
    }

    /**
     * A media object representing the circumstances before performing this
     * direction.
     *
     * @param MediaObject|MediaObject[]|string|string[] $beforeMedia
     *
     * @return static
     *
     * @see http://schema.org/beforeMedia
     */
    public function beforeMedia($beforeMedia)
    {
        return $this->setProperty('beforeMedia', $beforeMedia);
    }

    /**
     * A media object representing the circumstances while performing this
     * direction.
     *
     * @param MediaObject|MediaObject[]|string|string[] $duringMedia
     *
     * @return static
     *
     * @see http://schema.org/duringMedia
     */
    public function duringMedia($duringMedia)
    {
        return $this->setProperty('duringMedia', $duringMedia);
    }

    /**
     * The length of time it takes to perform instructions or a direction (not
     * including time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $performTime
     *
     * @return static
     *
     * @see http://schema.org/performTime
     */
    public function performTime($performTime)
    {
        return $this->setProperty('performTime', $performTime);
    }

    /**
     * The length of time it takes to prepare the items to be used in
     * instructions or a direction, in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $prepTime
     *
     * @return static
     *
     * @see http://schema.org/prepTime
     */
    public function prepTime($prepTime)
    {
        return $this->setProperty('prepTime', $prepTime);
    }

    /**
     * A sub-property of instrument. A supply consumed when performing
     * instructions or a direction.
     *
     * @param HowToSupply|HowToSupply[]|string|string[] $supply
     *
     * @return static
     *
     * @see http://schema.org/supply
     */
    public function supply($supply)
    {
        return $this->setProperty('supply', $supply);
    }

    /**
     * A sub property of instrument. An object used (but not consumed) when
     * performing instructions or a direction.
     *
     * @param HowToTool|HowToTool[]|string|string[] $tool
     *
     * @return static
     *
     * @see http://schema.org/tool
     */
    public function tool($tool)
    {
        return $this->setProperty('tool', $tool);
    }

    /**
     * The total time required to perform instructions or a direction (including
     * time to prepare the supplies), in [ISO 8601 duration
     * format](http://en.wikipedia.org/wiki/ISO_8601).
     *
     * @param Duration|Duration[] $totalTime
     *
     * @return static
     *
     * @see http://schema.org/totalTime
     */
    public function totalTime($totalTime)
    {
        return $this->setProperty('totalTime', $totalTime);
    }

}
