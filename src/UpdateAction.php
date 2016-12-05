<?php

namespace Spatie\SchemaOrg;

/**
 * The act of managing by changing/editing the state of the object.
 *
 * @see http://schema.org/UpdateAction
 */
class UpdateAction extends Action
{
    /**
     * A sub property of object. The collection target of the action.
     *
     * @param \Spatie\SchemaOrg\Thing $collection
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
     * @param \Spatie\SchemaOrg\Thing $targetCollection
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
