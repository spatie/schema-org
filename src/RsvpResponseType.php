<?php

namespace Spatie\SchemaOrg;

/**
 * RsvpResponseType is an enumeration type whose instances represent responding
 * to an RSVP request.
 *
 * @see http://schema.org/RsvpResponseType
 *
 * @mixin \Spatie\SchemaOrg\Enumeration
 */
class RsvpResponseType extends BaseType
{
    /**
     * The invitee may or may not attend.
     *
     * @see http://schema.org/RsvpResponseMaybe
     */
     const RsvpResponseMaybe = 'http://schema.org/RsvpResponseMaybe';

    /**
     * The invitee will not attend.
     *
     * @see http://schema.org/RsvpResponseNo
     */
     const RsvpResponseNo = 'http://schema.org/RsvpResponseNo';

    /**
     * The invitee will attend.
     *
     * @see http://schema.org/RsvpResponseYes
     */
     const RsvpResponseYes = 'http://schema.org/RsvpResponseYes';

}
