<?php

namespace HireVoice\Neo4j\Event;

/**
 * Event preRelationUpdate
 */
class PreRelationUpdate extends RelationEvent
{
    /**
     * {@inheritdoc}
     */
    public function getEventName()
    {
        return 'preRelationUpdate';
    }

}