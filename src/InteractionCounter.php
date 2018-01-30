<?php

namespace Spatie\SchemaOrg;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases,
 * authors will use a subtype to specify the specific type of interaction.
 *
 * @see 
 */
class InteractionCounter extends StructuredValue
{
    /**
     * The Action representing the type of interaction. For up votes, +1s, etc.
     * use [[LikeAction]]. For down votes use [[DislikeAction]]. Otherwise, use
     * the most specific Action.
     *
     * @param Action|Action[] $interactionType
     *
     * @return static
     *
     * @see 
     */
    public function interactionType($interactionType)
    {
        return $this->setProperty('interactionType', $interactionType);
    }

}
