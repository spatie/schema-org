<?php

namespace Spatie\SchemaOrg;

/**
 * The act of managing by changing/editing the state of the object.
 *
 * @see http://schema.org/UpdateAction
 *
 * @mixin \Spatie\SchemaOrg\Action
 */
class UpdateAction extends BaseType
{
    /**
     * A sub property of object. The collection target of the action.
     *
     * @param Thing|Thing[] $collection
     *
     * @return static
     *
     * @see http://schema.org/collection
     */
    public function collection($collection)
    {
        return $this->setProperty('collection', $collection);
    }

    /**
     * A sub property of object. The collection target of the action.
     *
     * @param Thing|Thing[] $targetCollection
     *
     * @return static
     *
     * @see http://schema.org/targetCollection
     */
    public function targetCollection($targetCollection)
    {
        return $this->setProperty('targetCollection', $targetCollection);
    }

}
