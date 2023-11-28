<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.BlessingWordsBatchReq</code>
 */
class BlessingWordsBatchReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     */
    protected $page = 0;
    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>string words = 3;</code>
     */
    protected $words = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $page
     *     @type int|string $size
     *     @type string $words
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     * @return int|string
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Generated from protobuf field <code>int64 page = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkInt64($var);
        $this->page = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Generated from protobuf field <code>int64 size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string words = 3;</code>
     * @return string
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * Generated from protobuf field <code>string words = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setWords($var)
    {
        GPBUtil::checkString($var, True);
        $this->words = $var;

        return $this;
    }

}
