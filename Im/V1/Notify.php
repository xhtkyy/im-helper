<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Notify 通知配置
 *
 * Generated from protobuf message <code>im.v1.Notify</code>
 */
class Notify extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     */
    protected $lid = 0;
    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 2;</code>
     */
    protected $openid = '';
    /**
     * &#64;gotags: json:"user_id"
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * &#64;gotags: json:"typ"
     *
     * Generated from protobuf field <code>string typ = 4;</code>
     */
    protected $typ = '';
    /**
     * &#64;gotags: json:"notify"
     *
     * Generated from protobuf field <code>bool notify = 5;</code>
     */
    protected $notify = false;
    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 6;</code>
     */
    protected $create_at = 0;
    /**
     * &#64;gotags: json:"update_at"
     *
     * Generated from protobuf field <code>int64 update_at = 7;</code>
     */
    protected $update_at = 0;
    /**
     * &#64;gotags: json:"delete_at"
     *
     * Generated from protobuf field <code>int64 delete_at = 8;</code>
     */
    protected $delete_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lid
     *           &#64;gotags: gorm:"primaryKey" json:"-"
     *     @type string $openid
     *           &#64;gotags: json:"openid"
     *     @type string $user_id
     *           &#64;gotags: json:"user_id"
     *     @type string $typ
     *           &#64;gotags: json:"typ"
     *     @type bool $notify
     *           &#64;gotags: json:"notify"
     *     @type int|string $create_at
     *           &#64;gotags: json:"create_at"
     *     @type int|string $update_at
     *           &#64;gotags: json:"update_at"
     *     @type int|string $delete_at
     *           &#64;gotags: json:"delete_at"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @return int|string
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLid($var)
    {
        GPBUtil::checkInt64($var);
        $this->lid = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 2;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * &#64;gotags: json:"openid"
     *
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
     * &#64;gotags: json:"user_id"
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * &#64;gotags: json:"user_id"
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"typ"
     *
     * Generated from protobuf field <code>string typ = 4;</code>
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * &#64;gotags: json:"typ"
     *
     * Generated from protobuf field <code>string typ = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTyp($var)
    {
        GPBUtil::checkString($var, True);
        $this->typ = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"notify"
     *
     * Generated from protobuf field <code>bool notify = 5;</code>
     * @return bool
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * &#64;gotags: json:"notify"
     *
     * Generated from protobuf field <code>bool notify = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setNotify($var)
    {
        GPBUtil::checkBool($var);
        $this->notify = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 6;</code>
     * @return int|string
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_at = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"update_at"
     *
     * Generated from protobuf field <code>int64 update_at = 7;</code>
     * @return int|string
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * &#64;gotags: json:"update_at"
     *
     * Generated from protobuf field <code>int64 update_at = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->update_at = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"delete_at"
     *
     * Generated from protobuf field <code>int64 delete_at = 8;</code>
     * @return int|string
     */
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    /**
     * &#64;gotags: json:"delete_at"
     *
     * Generated from protobuf field <code>int64 delete_at = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeleteAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->delete_at = $var;

        return $this;
    }

}

