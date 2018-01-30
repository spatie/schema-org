<?php

namespace Spatie\SchemaOrg;

/**
 * The act of posing a question / favor to someone.
 * 
 * Related actions:
 * 
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
 *
 * @see 
 */
class AskAction extends CommunicateAction
{
    /**
     * A sub property of object. A question.
     *
     * @param Question|Question[] $question
     *
     * @return static
     *
     * @see 
     */
    public function question($question)
    {
        return $this->setProperty('question', $question);
    }

}
