<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.PairRelaStatusQuery</code>
 */
class PairRelaStatusQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string mains = 1;</code>
     */
    private $mains;
    /**
     * Generated from protobuf field <code>repeated string peers = 2;</code>
     */
    private $peers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $mains
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $peers
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string mains = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMains()
    {
        return $this->mains;
    }

    /**
     * Generated from protobuf field <code>repeated string mains = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->mains = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string peers = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPeers()
    {
        return $this->peers;
    }

    /**
     * Generated from protobuf field <code>repeated string peers = 2;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPeers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->peers = $arr;

        return $this;
    }

}
