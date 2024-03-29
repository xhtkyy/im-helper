<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.ClientAttrMem</code>
 */
class ClientAttrMem extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"relation"
     *
     * Generated from protobuf field <code>string relation = 1;</code>
     */
    protected $relation = '';
    /**
     * &#64;gotags: json:"creatorCardId"
     *
     * Generated from protobuf field <code>string creator_card_id = 2;</code>
     */
    protected $creator_card_id = '';
    /**
     * &#64;gotags: json:"member"
     *
     * Generated from protobuf field <code>repeated .im.v1.ClientAttr member = 3;</code>
     */
    private $member;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $relation
     *           &#64;gotags: json:"relation"
     *     @type string $creator_card_id
     *           &#64;gotags: json:"creatorCardId"
     *     @type \Im\V1\ClientAttr[]|\Google\Protobuf\Internal\RepeatedField $member
     *           &#64;gotags: json:"member"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"relation"
     *
     * Generated from protobuf field <code>string relation = 1;</code>
     * @return string
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * &#64;gotags: json:"relation"
     *
     * Generated from protobuf field <code>string relation = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRelation($var)
    {
        GPBUtil::checkString($var, True);
        $this->relation = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"creatorCardId"
     *
     * Generated from protobuf field <code>string creator_card_id = 2;</code>
     * @return string
     */
    public function getCreatorCardId()
    {
        return $this->creator_card_id;
    }

    /**
     * &#64;gotags: json:"creatorCardId"
     *
     * Generated from protobuf field <code>string creator_card_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatorCardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator_card_id = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"member"
     *
     * Generated from protobuf field <code>repeated .im.v1.ClientAttr member = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * &#64;gotags: json:"member"
     *
     * Generated from protobuf field <code>repeated .im.v1.ClientAttr member = 3;</code>
     * @param \Im\V1\ClientAttr[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMember($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Im\V1\ClientAttr::class);
        $this->member = $arr;

        return $this;
    }

}

