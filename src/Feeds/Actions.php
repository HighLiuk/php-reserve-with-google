<?php

namespace HighLiuk\Rwg\Feeds;

use Generated\Rwg\ActionDetail;
use Generated\Rwg\ActionFeed;
use HighLiuk\Rwg\Exportable;

/**
 * @extends Feed<ActionDetail, ActionFeed>
 */
class Actions extends Feed
{
    use Exportable;

    protected function getName()
    {
        return 'action';
    }

    protected function getId()
    {
        return 'reservewithgoogle.action.v2';
    }

    protected function getFeed()
    {
        return new ActionFeed;
    }
}
