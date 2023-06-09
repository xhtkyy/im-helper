<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.GroupCreat</code>
 */
class GroupCreat extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.im.v1.Group group = 1;</code>
     */
    protected $group = null;
    /**
     * Generated from protobuf field <code>repeated string rids = 2;</code>
     */
    private $rids;
    /**
     * Generated from protobuf field <code>repeated .im.v1.Member members = 3;</code>
     */
    private $members;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\Group $group
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $rids
     *     @type \Im\V1\Member[]|\Google\Protobuf\Internal\RepeatedField $members
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.im.v1.Group group = 1;</code>
     * @return \Im\V1\Group|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    public function hasGroup()
    {
        return isset($this->group);
    }

    public function clearGroup()
    {
        unset($this->group);
    }

    /**
     * Generated from protobuf field <code>.im.v1.Group group = 1;</code>
     * @param \Im\V1\Group $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Group::class);
        $this->group = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string rids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRids()
    {
        return $this->rids;
    }

    /**
     * Generated from protobuf field <code>repeated string rids = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->rids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .im.v1.Member members = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Generated from protobuf field <code>repeated .im.v1.Member members = 3;</code>
     * @param \Im\V1\Member[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Im\V1\Member::class);
        $this->members = $arr;

        return $this;
    }

}

