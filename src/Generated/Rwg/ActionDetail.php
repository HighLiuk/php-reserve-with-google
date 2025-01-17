<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: main.proto

namespace Generated\Rwg;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>ActionDetail</code>
 */
class ActionDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     */
    protected $entity_id = '';
    /**
     * Generated from protobuf field <code>string link_id = 3;</code>
     */
    protected $link_id = '';
    /**
     * Deep link for action detail
     *
     * Generated from protobuf field <code>string url = 4;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>repeated .Action actions = 1;</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_id
     *     @type string $link_id
     *     @type string $url
     *           Deep link for action detail
     *     @type array<\Generated\Rwg\Action>|\Google\Protobuf\Internal\RepeatedField $actions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Main::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string link_id = 3;</code>
     * @return string
     */
    public function getLinkId()
    {
        return $this->link_id;
    }

    /**
     * Generated from protobuf field <code>string link_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_id = $var;

        return $this;
    }

    /**
     * Deep link for action detail
     *
     * Generated from protobuf field <code>string url = 4;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Deep link for action detail
     *
     * Generated from protobuf field <code>string url = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Action actions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Generated from protobuf field <code>repeated .Action actions = 1;</code>
     * @param array<\Generated\Rwg\Action>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Generated\Rwg\Action::class);
        $this->actions = $arr;

        return $this;
    }

}

