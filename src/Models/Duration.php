<?php

namespace HighLiuk\Rwg\Models;

use Generated\Rwg\ServiceDuration;

/**
 * @implements Model<ServiceDuration>
 */
class Duration implements Model
{
    public function __construct(public readonly Range $range) {}

    public function toMessage(): ServiceDuration
    {
        $duration = (new ServiceDuration)
            ->setDurationInterpretation($this->range->type->value)
            ->setMinDurationSec($this->range->min);

        if ($this->range->max !== null) {
            $duration->setMaxDurationSec($this->range->max);
        }

        return $duration;
    }
}
