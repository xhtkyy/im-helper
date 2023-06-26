<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.RespArr</code>
 */
class RespArr extends \Google\Protobuf\Internal\Message
{
    protected $array;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\Pairs $pairs
     *           &#64;gotags: json:"pairs"
     *     @type \Im\V1\Groups $groups
     *           &#64;gotags: json:"groups"
     *     @type \Im\V1\Members $members
     *           &#64;gotags: json:"members"
     *     @type \Im\V1\Messages $messages
     *           &#64;gotags: json:"messages"
     *     @type \Im\V1\Notifies $notifies
     *           &#64;gotags: json:"notifies"
     *     @type \Im\V1\Applies $applies
     *           &#64;gotags: json:"applies"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"pairs"
     *
     * Generated from protobuf field <code>.im.v1.Pairs pairs = 1;</code>
     * @return \Im\V1\Pairs|null
     */
    public function getPairs()
    {
        return $this->readOneof(1);
    }

    public function hasPairs()
    {
        return $this->hasOneof(1);
    }

    /**
     * &#64;gotags: json:"pairs"
     *
     * Generated from protobuf field <code>.im.v1.Pairs pairs = 1;</code>
     * @param \Im\V1\Pairs $var
     * @return $this
     */
    public function setPairs($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Pairs::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * &#64;gotags: json:"groups"
     *
     * Generated from protobuf field <code>.im.v1.Groups groups = 2;</code>
     * @return \Im\V1\Groups|null
     */
    public function getGroups()
    {
        return $this->readOneof(2);
    }

    public function hasGroups()
    {
        return $this->hasOneof(2);
    }

    /**
     * &#64;gotags: json:"groups"
     *
     * Generated from protobuf field <code>.im.v1.Groups groups = 2;</code>
     * @param \Im\V1\Groups $var
     * @return $this
     */
    public function setGroups($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Groups::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * &#64;gotags: json:"members"
     *
     * Generated from protobuf field <code>.im.v1.Members members = 3;</code>
     * @return \Im\V1\Members|null
     */
    public function getMembers()
    {
        return $this->readOneof(3);
    }

    public function hasMembers()
    {
        return $this->hasOneof(3);
    }

    /**
     * &#64;gotags: json:"members"
     *
     * Generated from protobuf field <code>.im.v1.Members members = 3;</code>
     * @param \Im\V1\Members $var
     * @return $this
     */
    public function setMembers($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Members::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * &#64;gotags: json:"messages"
     *
     * Generated from protobuf field <code>.im.v1.Messages messages = 4;</code>
     * @return \Im\V1\Messages|null
     */
    public function getMessages()
    {
        return $this->readOneof(4);
    }

    public function hasMessages()
    {
        return $this->hasOneof(4);
    }

    /**
     * &#64;gotags: json:"messages"
     *
     * Generated from protobuf field <code>.im.v1.Messages messages = 4;</code>
     * @param \Im\V1\Messages $var
     * @return $this
     */
    public function setMessages($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Messages::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * &#64;gotags: json:"notifies"
     *
     * Generated from protobuf field <code>.im.v1.Notifies notifies = 5;</code>
     * @return \Im\V1\Notifies|null
     */
    public function getNotifies()
    {
        return $this->readOneof(5);
    }

    public function hasNotifies()
    {
        return $this->hasOneof(5);
    }

    /**
     * &#64;gotags: json:"notifies"
     *
     * Generated from protobuf field <code>.im.v1.Notifies notifies = 5;</code>
     * @param \Im\V1\Notifies $var
     * @return $this
     */
    public function setNotifies($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Notifies::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * &#64;gotags: json:"applies"
     *
     * Generated from protobuf field <code>.im.v1.Applies applies = 6;</code>
     * @return \Im\V1\Applies|null
     */
    public function getApplies()
    {
        return $this->readOneof(6);
    }

    public function hasApplies()
    {
        return $this->hasOneof(6);
    }

    /**
     * &#64;gotags: json:"applies"
     *
     * Generated from protobuf field <code>.im.v1.Applies applies = 6;</code>
     * @param \Im\V1\Applies $var
     * @return $this
     */
    public function setApplies($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Applies::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getArray()
    {
        return $this->whichOneof("array");
    }

}

