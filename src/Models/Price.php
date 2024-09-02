<?php

namespace HighLiuk\Rwg\Models;

use Generated\Rwg\Price as GoogleReservePrice;
use Generated\Rwg\ServicePrice;

/**
 * @implements Model<ServicePrice>
 */
class Price implements Model
{
    public function __construct(
        public readonly Range $range,
        public readonly string $currency_code,
    ) {}

    public function toMessage(): ServicePrice
    {
        $price = (new ServicePrice)
            ->setPriceInterpretation($this->range->type->value)
            ->setMinPrice(
                (new GoogleReservePrice)
                    ->setPriceMicros($this->range->min)
                    ->setCurrencyCode($this->currency_code)
            );

        if ($this->range->max !== null) {
            $price->setMaxPrice(
                (new GoogleReservePrice)
                    ->setPriceMicros($this->range->max)
                    ->setCurrencyCode($this->currency_code)
            );
        }

        return $price;
    }
}
