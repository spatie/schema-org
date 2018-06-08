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
 * @see http://schema.org/ReplyAction
 *
 * @mixin \Spatie\SchemaOrg\CommunicateAction
 */
class ReplyAction extends BaseType
{
    /**
     * A sub property of result. The Comment created or sent as a result of this
     * action.
     *
     * @param Comment|Comment[] $resultComment
     *
     * @return static
     *
     * @see http://schema.org/resultComment
     */
    public function resultComment($resultComment)
    {
        return $this->setProperty('resultComment', $resultComment);
    }

}
