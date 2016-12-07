<?php

namespace Spatie\SchemaOrg;

/**
 * A single message from a sender to one or more organizations or people.
 *
 * @see http://schema.org/Message
 */
class Message extends CreativeWork
{
    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param \Spatie\SchemaOrg\Audience|\Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $recipient
     *
     * @return static
     *
     * @see http://schema.org/recipient
     */
    public function recipient($recipient)
    {
        return $this->setProperty('recipient', $recipient);
    }

    /**
     * A sub property of participant. The participant who is at the sending end
     * of the action.
     *
     * @param \Spatie\SchemaOrg\Audience|\Spatie\SchemaOrg\Organization|\Spatie\SchemaOrg\Person $sender
     *
     * @return static
     *
     * @see http://schema.org/sender
     */
    public function sender($sender)
    {
        return $this->setProperty('sender', $sender);
    }

    /**
     * The date/time at which the message has been read by the recipient if a
     * single recipient exists.
     *
     * @param \DateTimeInterface $dateRead
     *
     * @return static
     *
     * @see http://schema.org/dateRead
     */
    public function dateRead($dateRead)
    {
        return $this->setProperty('dateRead', $dateRead);
    }

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @param \DateTimeInterface $dateReceived
     *
     * @return static
     *
     * @see http://schema.org/dateReceived
     */
    public function dateReceived($dateReceived)
    {
        return $this->setProperty('dateReceived', $dateReceived);
    }

    /**
     * The date/time at which the message was sent.
     *
     * @param \DateTimeInterface $dateSent
     *
     * @return static
     *
     * @see http://schema.org/dateSent
     */
    public function dateSent($dateSent)
    {
        return $this->setProperty('dateSent', $dateSent);
    }

    /**
     * A CreativeWork attached to the message.
     *
     * @param \Spatie\SchemaOrg\CreativeWork $messageAttachment
     *
     * @return static
     *
     * @see http://schema.org/messageAttachment
     */
    public function messageAttachment($messageAttachment)
    {
        return $this->setProperty('messageAttachment', $messageAttachment);
    }

}
