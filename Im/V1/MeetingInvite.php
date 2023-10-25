<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 音视频会议邀请
 *
 * Generated from protobuf message <code>im.v1.MeetingInvite</code>
 */
class MeetingInvite extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     */
    protected $lid = 0;
    /**
     * &#64;gotags: json:"creator"
     *
     * Generated from protobuf field <code>string creator = 2;</code>
     */
    protected $creator = '';
    /**
     * &#64;gotags: json:"user_id"
     *
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * &#64;gotags: json:"room_id"
     *
     * Generated from protobuf field <code>string room_id = 4;</code>
     */
    protected $room_id = '';
    /**
     * &#64;gotags: gorm:"serializer:json" json:"user"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct user = 5;</code>
     */
    protected $user = null;
    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 8;</code>
     */
    protected $create_at = 0;
    /**
     * &#64;gotags: json:"update_at"
     *
     * Generated from protobuf field <code>int64 update_at = 9;</code>
     */
    protected $update_at = 0;
    /**
     * &#64;gotags: json:"delete_at"
     *
     * Generated from protobuf field <code>int64 delete_at = 10;</code>
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
     *     @type string $creator
     *           &#64;gotags: json:"creator"
     *     @type string $user_id
     *           &#64;gotags: json:"user_id"
     *     @type string $room_id
     *           &#64;gotags: json:"room_id"
     *     @type \Google\Protobuf\Struct $user
     *           &#64;gotags: gorm:"serializer:json" json:"user"
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
     * &#64;gotags: json:"creator"
     *
     * Generated from protobuf field <code>string creator = 2;</code>
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * &#64;gotags: json:"creator"
     *
     * Generated from protobuf field <code>string creator = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCreator($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator = $var;

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
     * &#64;gotags: json:"room_id"
     *
     * Generated from protobuf field <code>string room_id = 4;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * &#64;gotags: json:"room_id"
     *
     * Generated from protobuf field <code>string room_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_id = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"user"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct user = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"user"
     *
     * Generated from protobuf field <code>.google.protobuf.Struct user = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->user = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 8;</code>
     * @return int|string
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * &#64;gotags: json:"create_at"
     *
     * Generated from protobuf field <code>int64 create_at = 8;</code>
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
     * Generated from protobuf field <code>int64 update_at = 9;</code>
     * @return int|string
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * &#64;gotags: json:"update_at"
     *
     * Generated from protobuf field <code>int64 update_at = 9;</code>
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
     * Generated from protobuf field <code>int64 delete_at = 10;</code>
     * @return int|string
     */
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    /**
     * &#64;gotags: json:"delete_at"
     *
     * Generated from protobuf field <code>int64 delete_at = 10;</code>
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

