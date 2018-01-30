<?php

namespace Spatie\SchemaOrg;

/**
 * The act of responding to a question/message asked/sent by the object. Related
 * to [[AskAction]]
 * 
 * Related actions:
 * 
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
 *
 * @see 
 */
class ReplyAction extends CommunicateAction
{
    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @param Comment|Comment[] $resultComment
     *
     * @return static
     *
     * @see 
     */
    public function resultComment($resultComment)
    {
        return $this->setProperty('resultComment', $resultComment);
    }

}
