<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The postal address for a merchant.
 *
 * Generated from protobuf message <code>PostalAddress</code>
 */
class PostalAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * The country, using ISO 3166-1 alpha-2 country code, e.g. "US" (required)
     *
     * Generated from protobuf field <code>string country = 1;</code>
     */
    protected $country = '';
    /**
     * The locality/city, e.g. "Mountain View". (required)
     *
     * Generated from protobuf field <code>string locality = 2;</code>
     */
    protected $locality = '';
    /**
     * The region/state/province, e.g. "CA". This field is only required in
     * countries where region is commonly a part of the address. (optional)
     *
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';
    /**
     * The postal code, e.g. "94043". (required)
     *
     * Generated from protobuf field <code>string postal_code = 4;</code>
     */
    protected $postal_code = '';
    /**
     * The street address, e.g. "1600 Amphitheatre Pkwy". (required)
     *
     * Generated from protobuf field <code>string street_address = 5;</code>
     */
    protected $street_address = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $country
     *           The country, using ISO 3166-1 alpha-2 country code, e.g. "US" (required)
     *     @type string $locality
     *           The locality/city, e.g. "Mountain View". (required)
     *     @type string $region
     *           The region/state/province, e.g. "CA". This field is only required in
     *           countries where region is commonly a part of the address. (optional)
     *     @type string $postal_code
     *           The postal code, e.g. "94043". (required)
     *     @type string $street_address
     *           The street address, e.g. "1600 Amphitheatre Pkwy". (required)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * The country, using ISO 3166-1 alpha-2 country code, e.g. "US" (required)
     *
     * Generated from protobuf field <code>string country = 1;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * The country, using ISO 3166-1 alpha-2 country code, e.g. "US" (required)
     *
     * Generated from protobuf field <code>string country = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * The locality/city, e.g. "Mountain View". (required)
     *
     * Generated from protobuf field <code>string locality = 2;</code>
     * @return string
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * The locality/city, e.g. "Mountain View". (required)
     *
     * Generated from protobuf field <code>string locality = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLocality($var)
    {
        GPBUtil::checkString($var, True);
        $this->locality = $var;

        return $this;
    }

    /**
     * The region/state/province, e.g. "CA". This field is only required in
     * countries where region is commonly a part of the address. (optional)
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * The region/state/province, e.g. "CA". This field is only required in
     * countries where region is commonly a part of the address. (optional)
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * The postal code, e.g. "94043". (required)
     *
     * Generated from protobuf field <code>string postal_code = 4;</code>
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * The postal code, e.g. "94043". (required)
     *
     * Generated from protobuf field <code>string postal_code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * The street address, e.g. "1600 Amphitheatre Pkwy". (required)
     *
     * Generated from protobuf field <code>string street_address = 5;</code>
     * @return string
     */
    public function getStreetAddress()
    {
        return $this->street_address;
    }

    /**
     * The street address, e.g. "1600 Amphitheatre Pkwy". (required)
     *
     * Generated from protobuf field <code>string street_address = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setStreetAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->street_address = $var;

        return $this;
    }

}

