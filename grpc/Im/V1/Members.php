<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.Members</code>
 */
class Members extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"arr"
     *
     * Generated from protobuf field <code>repeated .im.v1.Member arr = 1;</code>
     */
    private $arr;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\Member[]|\Google\Protobuf\Internal\RepeatedField $arr
     *           &#64;gotags: json:"arr"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"arr"
     *
     * Generated from protobuf field <code>repeated .im.v1.Member arr = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArr()
    {
        return $this->arr;
    }

    /**
     * &#64;gotags: json:"arr"
     *
     * Generated from protobuf field <code>repeated .im.v1.Member arr = 1;</code>
     * @param \Im\V1\Member[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArr($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Im\V1\Member::class);
        $this->arr = $arr;

        return $this;
    }

}

