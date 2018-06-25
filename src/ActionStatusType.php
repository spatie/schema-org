<?php

namespace Spatie\SchemaOrg;

/**
 * The status of an Action.
 *
 * @see http://schema.org/ActionStatusType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class ActionStatusType extends BaseType
{
    /**
     * An in-progress action (e.g, while watching the movie, or driving to a
     * location).
     *
     * @see http://schema.org/ActiveActionStatus
     */
     const ActiveActionStatus = 'http://schema.org/ActiveActionStatus';

    /**
     * An action that has already taken place.
     *
     * @see http://schema.org/CompletedActionStatus
     */
     const CompletedActionStatus = 'http://schema.org/CompletedActionStatus';

    /**
     * An action that failed to complete. The action's error property and the
     * HTTP return code contain more information about the failure.
     *
     * @see http://schema.org/FailedActionStatus
     */
     const FailedActionStatus = 'http://schema.org/FailedActionStatus';

    /**
     * A description of an action that is supported.
     *
     * @see http://schema.org/PotentialActionStatus
     */
     const PotentialActionStatus = 'http://schema.org/PotentialActionStatus';

}
