<?php

namespace Spatie\SchemaOrg;

/**
 * The act of posing a question / favor to someone.
 * 
 * Related actions:
 * 
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
 *
 * @see http://schema.org/AskAction
 */
class AskAction extends CommunicateAction
{
    /**
     * A sub property of object. A question.
     *
     * @param \Spatie\SchemaOrg\Question $question
     *
     * @return static
     *
     * @see http://schema.org/question
     */
    public function question($question)
    {
        return $this->setProperty('question', $question);
    }

}
