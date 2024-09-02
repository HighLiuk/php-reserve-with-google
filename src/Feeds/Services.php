<?php

namespace HighLiuk\Rwg\Feeds;

use Generated\Rwg\Service;
use Generated\Rwg\ServiceFeed;
use HighLiuk\Rwg\Exportable;

/**
 * @extends Feed<Service, ServiceFeed>
 */
class Services extends Feed
{
    use Exportable;

    protected function getName()
    {
        return 'service';
    }

    protected function getId()
    {
        return 'glam.service.v0';
    }

    protected function getFeed()
    {
        return new ServiceFeed;
    }
}
