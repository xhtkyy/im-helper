<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.GeoGroupJoinWaits</code>
 */
class GeoGroupJoinWaits extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"waits"
     *
     * Generated from protobuf field <code>repeated .im.v1.GeoGroup waits = 1;</code>
     */
    private $waits;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\GeoGroup[]|\Google\Protobuf\Internal\RepeatedField $waits
     *           &#64;gotags: json:"waits"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"waits"
     *
     * Generated from protobuf field <code>repeated .im.v1.GeoGroup waits = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWaits()
    {
        return $this->waits;
    }

    /**
     * &#64;gotags: json:"waits"
     *
     * Generated from protobuf field <code>repeated .im.v1.GeoGroup waits = 1;</code>
     * @param \Im\V1\GeoGroup[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWaits($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Im\V1\GeoGroup::class);
        $this->waits = $arr;

        return $this;
    }

}

