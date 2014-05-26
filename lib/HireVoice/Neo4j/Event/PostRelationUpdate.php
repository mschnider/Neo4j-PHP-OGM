<?php

namespace HireVoice\Neo4j\Event;

/**
 * Event postRelationUpdate
 */
class PostRelationUpdate extends RelationEvent
{
    /**
     * {@inheritdoc}
     */
    public function getEventName()
    {
        return 'postRelationUpdate';
    }

}