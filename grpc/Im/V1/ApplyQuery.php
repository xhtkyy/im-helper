<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.ApplyQuery</code>
 */
class ApplyQuery extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 typ = 1;</code>
     */
    protected $typ = 0;
    /**
     * Generated from protobuf field <code>string gid = 2;</code>
     */
    protected $gid = '';
    /**
     * Generated from protobuf field <code>string status = 3;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>repeated string card_ids = 4;</code>
     */
    private $card_ids;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $typ
     *     @type string $gid
     *     @type string $status
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $card_ids
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 typ = 1;</code>
     * @return int|string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Generated from protobuf field <code>int64 typ = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTyp($var)
    {
        GPBUtil::checkInt64($var);
        $this->typ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string gid = 2;</code>
     * @return string
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Generated from protobuf field <code>string gid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGid($var)
    {
        GPBUtil::checkString($var, True);
        $this->gid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string card_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCardIds()
    {
        return $this->card_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string card_ids = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCardIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->card_ids = $arr;

        return $this;
    }

}

