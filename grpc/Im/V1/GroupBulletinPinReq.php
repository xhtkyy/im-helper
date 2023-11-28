<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.GroupBulletinPinReq</code>
 */
class GroupBulletinPinReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool pin = 1;</code>
     */
    protected $pin = false;
    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     */
    protected $openid = '';
    /**
     * Generated from protobuf field <code>string card_id = 3;</code>
     */
    protected $card_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $pin
     *     @type string $openid
     *     @type string $card_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool pin = 1;</code>
     * @return bool
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * Generated from protobuf field <code>bool pin = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setPin($var)
    {
        GPBUtil::checkBool($var);
        $this->pin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->openid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string card_id = 3;</code>
     * @return string
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * Generated from protobuf field <code>string card_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_id = $var;

        return $this;
    }

}

