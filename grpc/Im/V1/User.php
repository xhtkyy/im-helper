<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 用户开放标识符
 *
 * Generated from protobuf message <code>im.v1.User</code>
 */
class User extends \Google\Protobuf\Internal\Message
{
    protected $id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\User\Short $short
     *           简写
     *     @type \Im\V1\User\Full $full
     *           全形
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * 简写
     *
     * Generated from protobuf field <code>.im.v1.User.Short short = 1;</code>
     * @return \Im\V1\User\Short|null
     */
    public function getShort()
    {
        return $this->readOneof(1);
    }

    public function hasShort()
    {
        return $this->hasOneof(1);
    }

    /**
     * 简写
     *
     * Generated from protobuf field <code>.im.v1.User.Short short = 1;</code>
     * @param \Im\V1\User\Short $var
     * @return $this
     */
    public function setShort($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\User\Short::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * 全形
     *
     * Generated from protobuf field <code>.im.v1.User.Full full = 2;</code>
     * @return \Im\V1\User\Full|null
     */
    public function getFull()
    {
        return $this->readOneof(2);
    }

    public function hasFull()
    {
        return $this->hasOneof(2);
    }

    /**
     * 全形
     *
     * Generated from protobuf field <code>.im.v1.User.Full full = 2;</code>
     * @param \Im\V1\User\Full $var
     * @return $this
     */
    public function setFull($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\User\Full::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->whichOneof("id");
    }

}

