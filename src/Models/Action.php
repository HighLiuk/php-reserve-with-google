<?php

namespace HighLiuk\Rwg\Models;

use Generated\Rwg\Action as GoogleReserveAction;
use Generated\Rwg\ActionDetail;
use Generated\Rwg\AppointmentInfo;

/**
 * @implements Model<ActionDetail>
 */
class Action implements Model
{
    public function __construct(
        public readonly string $merchant_id,
        public readonly string $link_id,
        public readonly string $url,
    ) {}

    public function toMessage(): ActionDetail
    {
        return (new ActionDetail)
            ->setEntityId($this->merchant_id)
            ->setLinkId($this->link_id)
            ->setUrl($this->url)
            ->setActions([
                (new GoogleReserveAction)
                    ->setAppointmentInfo(
                        new AppointmentInfo
                    ),
            ]);
    }
}
