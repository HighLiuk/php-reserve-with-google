<?php

namespace HighLiuk\Rwg\Models;

use InvalidArgumentException;

class Range
{
    /**
     * @param  positive-int  $min
     * @param  ?positive-int  $max
     */
    protected function __construct(
        public readonly int $min,
        public readonly ?int $max,
        public readonly RangeType $type,
    ) {}

    /**
     * @param  positive-int  $value
     */
    public static function exact(int $value): self
    {
        return new self(
            min: $value,
            max: null,
            type: RangeType::EXACT,
        );
    }

    /**
     * @param  positive-int  $value
     */
    public static function startsAt(int $value): self
    {
        return new self(
            min: $value,
            max: null,
            type: RangeType::STARTS_AT,
        );
    }

    /**
     * @param  positive-int  $min
     * @param  positive-int  $max
     */
    public static function range(int $min, int $max): self
    {
        if ($min > $max) {
            throw new InvalidArgumentException('Min value must be less than or equal to max value.');
        }

        if ($min === $max) {
            return self::exact($min);
        }

        return new self(
            min: $min,
            max: $max,
            type: RangeType::RANGE,
        );
    }

    /**
     * @param  positive-int  $value
     */
    public static function notDisplayed(int $value = 1): self
    {
        return new self(
            min: $value,
            max: null,
            type: RangeType::NOT_DISPLAYED,
        );
    }
}
