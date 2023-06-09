<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.PairID</code>
 */
class PairID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string main = 1;</code>
     */
    protected $main = '';
    /**
     * Generated from protobuf field <code>string peer = 2;</code>
     */
    protected $peer = '';
    /**
     * Generated from protobuf field <code>bool history = 3;</code>
     */
    protected $history = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main
     *     @type string $peer
     *     @type bool $history
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string main = 1;</code>
     * @return string
     */
    public function getMain()
    {
        return $this->main;
    }

    /**
     * Generated from protobuf field <code>string main = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMain($var)
    {
        GPBUtil::checkString($var, True);
        $this->main = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string peer = 2;</code>
     * @return string
     */
    public function getPeer()
    {
        return $this->peer;
    }

    /**
     * Generated from protobuf field <code>string peer = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPeer($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool history = 3;</code>
     * @return bool
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * Generated from protobuf field <code>bool history = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkBool($var);
        $this->history = $var;

        return $this;
    }

}

