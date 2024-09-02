<?php

namespace HighLiuk\Rwg\Feeds;

use Generated\Rwg\Entity;
use Generated\Rwg\EntityFeed;
use HighLiuk\Rwg\Exportable;

/**
 * @extends Feed<Entity, EntityFeed>
 */
class Merchants extends Feed
{
    use Exportable;

    protected function getName()
    {
        return 'merchant';
    }

    protected function getId()
    {
        return 'reservewithgoogle.entity';
    }

    protected function getFeed()
    {
        return new EntityFeed;
    }
}
