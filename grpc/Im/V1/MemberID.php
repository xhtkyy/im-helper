<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.MemberID</code>
 */
class MemberID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string group = 1;</code>
     */
    protected $group = '';
    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     */
    protected $openid = '';
    /**
     * Delete请求，退出后没有其他身份在群里时需转入融云注册ID
     *
     * Generated from protobuf field <code>string rid = 3;</code>
     */
    protected $rid = '';
    /**
     * Generated from protobuf field <code>bool history = 4;</code>
     */
    protected $history = false;
    /**
     * 是否服务端调用
     *
     * Generated from protobuf field <code>bool from_server = 5;</code>
     */
    protected $from_server = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group
     *     @type string $openid
     *     @type string $rid
     *           Delete请求，退出后没有其他身份在群里时需转入融云注册ID
     *     @type bool $history
     *     @type bool $from_server
     *           是否服务端调用
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string group = 1;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Generated from protobuf field <code>string group = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

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
     * Delete请求，退出后没有其他身份在群里时需转入融云注册ID
     *
     * Generated from protobuf field <code>string rid = 3;</code>
     * @return string
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * Delete请求，退出后没有其他身份在群里时需转入融云注册ID
     *
     * Generated from protobuf field <code>string rid = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRid($var)
    {
        GPBUtil::checkString($var, True);
        $this->rid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool history = 4;</code>
     * @return bool
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Generated from protobuf field <code>bool history = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkBool($var);
        $this->history = $var;

        return $this;
    }

    /**
     * 是否服务端调用
     *
     * Generated from protobuf field <code>bool from_server = 5;</code>
     * @return bool
     */
    public function getFromServer()
    {
        return $this->from_server;
    }

    /**
     * 是否服务端调用
     *
     * Generated from protobuf field <code>bool from_server = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setFromServer($var)
    {
        GPBUtil::checkBool($var);
        $this->from_server = $var;

        return $this;
    }

}

