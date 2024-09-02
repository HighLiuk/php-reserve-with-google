<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>FilesetDescriptor</code>
 */
class FilesetDescriptor extends \Google\Protobuf\Internal\Message
{
    /**
     * The timestamp at which this feed was generated, in Unix time format
     * (seconds since the epoch). (required)
     *
     * Generated from protobuf field <code>int64 generation_timestamp = 1;</code>
     */
    protected $generation_timestamp = 0;
    /**
     * Identifies the name of this feed. (required)
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Paths (relative to the dropbox root) specifying data files included in this
     * feed. (required)
     *
     * Generated from protobuf field <code>repeated string data_file = 3;</code>
     */
    private $data_file;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $generation_timestamp
     *           The timestamp at which this feed was generated, in Unix time format
     *           (seconds since the epoch). (required)
     *     @type string $name
     *           Identifies the name of this feed. (required)
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $data_file
     *           Paths (relative to the dropbox root) specifying data files included in this
     *           feed. (required)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * The timestamp at which this feed was generated, in Unix time format
     * (seconds since the epoch). (required)
     *
     * Generated from protobuf field <code>int64 generation_timestamp = 1;</code>
     * @return int|string
     */
    public function getGenerationTimestamp()
    {
        return $this->generation_timestamp;
    }

    /**
     * The timestamp at which this feed was generated, in Unix time format
     * (seconds since the epoch). (required)
     *
     * Generated from protobuf field <code>int64 generation_timestamp = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setGenerationTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->generation_timestamp = $var;

        return $this;
    }

    /**
     * Identifies the name of this feed. (required)
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Identifies the name of this feed. (required)
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Paths (relative to the dropbox root) specifying data files included in this
     * feed. (required)
     *
     * Generated from protobuf field <code>repeated string data_file = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDataFile()
    {
        return $this->data_file;
    }

    /**
     * Paths (relative to the dropbox root) specifying data files included in this
     * feed. (required)
     *
     * Generated from protobuf field <code>repeated string data_file = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDataFile($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data_file = $arr;

        return $this;
    }

}
