<?php

namespace Spatie\SchemaOrg;

/**
 * A single message from a sender to one or more organizations or people.
 *
 * @see 
 */
class Message extends CreativeWork
{
    /**
     * A sub property of participant. The participant who is at the receiving
     * end of the action.
     *
     * @param Audience|Audience[]|Organization|Organization[]|Person|Person[] $recipient
     *
     * @return static
     *
     * @see 
     */
    public function recipient($recipient)
    {
        return $this->setProperty('recipient', $recipient);
    }

    /**
     * A sub property of participant. The participant who is at the sending end
     * of the action.
     *
     * @param Audience|Audience[]|Organization|Organization[]|Person|Person[] $sender
     *
     * @return static
     *
     * @see 
     */
    public function sender($sender)
    {
        return $this->setProperty('sender', $sender);
    }

    /**
     * The date/time at which the message has been read by the recipient if a
     * single recipient exists.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateRead
     *
     * @return static
     *
     * @see 
     */
    public function dateRead($dateRead)
    {
        return $this->setProperty('dateRead', $dateRead);
    }

    /**
     * A CreativeWork attached to the message.
     *
     * @param CreativeWork|CreativeWork[] $messageAttachment
     *
     * @return static
     *
     * @see 
     */
    public function messageAttachment($messageAttachment)
    {
        return $this->setProperty('messageAttachment', $messageAttachment);
    }

    /**
     * The date/time at which the message was sent.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateSent
     *
     * @return static
     *
     * @see 
     */
    public function dateSent($dateSent)
    {
        return $this->setProperty('dateSent', $dateSent);
    }

    /**
     * The date/time the message was received if a single recipient exists.
     *
     * @param \DateTimeInterface|\DateTimeInterface[] $dateReceived
     *
     * @return static
     *
     * @see 
     */
    public function dateReceived($dateReceived)
    {
        return $this->setProperty('dateReceived', $dateReceived);
    }

}
