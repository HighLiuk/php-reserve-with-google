<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The price of a service or a fee.
 *
 * Generated from protobuf message <code>Price</code>
 */
class Price extends \Google\Protobuf\Internal\Message
{
    /**
     * The price in micro-units of the currency.
     * For example: 1.95 USD is 1950000 in micro-units.
     * If your price contains fractions of the smallest currency unit, then it
     * will be rounded using nearest even rounding (e.g. 2.5 cents rounded
     * to 2 cents, 3.5 cents rounded to 4 cents, 0.5 cents rounded to 0 cents,
     * 2.51 cents rounded to 3 cents).
     * Required.
     *
     * Generated from protobuf field <code>int64 price_micros = 1;</code>
     */
    protected $price_micros = 0;
    /**
     * The currency of the price that is defined in ISO 4217.
     * Required.
     *
     * Generated from protobuf field <code>string currency_code = 2;</code>
     */
    protected $currency_code = '';
    /**
     * An optional and opaque string that identifies the pricing option that is
     * associated with the extended price.
     * Optional.
     *
     * Generated from protobuf field <code>string pricing_option_tag = 3;</code>
     */
    protected $pricing_option_tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $price_micros
     *           The price in micro-units of the currency.
     *           For example: 1.95 USD is 1950000 in micro-units.
     *           If your price contains fractions of the smallest currency unit, then it
     *           will be rounded using nearest even rounding (e.g. 2.5 cents rounded
     *           to 2 cents, 3.5 cents rounded to 4 cents, 0.5 cents rounded to 0 cents,
     *           2.51 cents rounded to 3 cents).
     *           Required.
     *     @type string $currency_code
     *           The currency of the price that is defined in ISO 4217.
     *           Required.
     *     @type string $pricing_option_tag
     *           An optional and opaque string that identifies the pricing option that is
     *           associated with the extended price.
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * The price in micro-units of the currency.
     * For example: 1.95 USD is 1950000 in micro-units.
     * If your price contains fractions of the smallest currency unit, then it
     * will be rounded using nearest even rounding (e.g. 2.5 cents rounded
     * to 2 cents, 3.5 cents rounded to 4 cents, 0.5 cents rounded to 0 cents,
     * 2.51 cents rounded to 3 cents).
     * Required.
     *
     * Generated from protobuf field <code>int64 price_micros = 1;</code>
     * @return int|string
     */
    public function getPriceMicros()
    {
        return $this->price_micros;
    }

    /**
     * The price in micro-units of the currency.
     * For example: 1.95 USD is 1950000 in micro-units.
     * If your price contains fractions of the smallest currency unit, then it
     * will be rounded using nearest even rounding (e.g. 2.5 cents rounded
     * to 2 cents, 3.5 cents rounded to 4 cents, 0.5 cents rounded to 0 cents,
     * 2.51 cents rounded to 3 cents).
     * Required.
     *
     * Generated from protobuf field <code>int64 price_micros = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPriceMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->price_micros = $var;

        return $this;
    }

    /**
     * The currency of the price that is defined in ISO 4217.
     * Required.
     *
     * Generated from protobuf field <code>string currency_code = 2;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The currency of the price that is defined in ISO 4217.
     * Required.
     *
     * Generated from protobuf field <code>string currency_code = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * An optional and opaque string that identifies the pricing option that is
     * associated with the extended price.
     * Optional.
     *
     * Generated from protobuf field <code>string pricing_option_tag = 3;</code>
     * @return string
     */
    public function getPricingOptionTag()
    {
        return $this->pricing_option_tag;
    }

    /**
     * An optional and opaque string that identifies the pricing option that is
     * associated with the extended price.
     * Optional.
     *
     * Generated from protobuf field <code>string pricing_option_tag = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPricingOptionTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->pricing_option_tag = $var;

        return $this;
    }

}

