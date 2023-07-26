<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.VoiceStreamRecordResp</code>
 */
class VoiceStreamRecordResp extends \Google\Protobuf\Internal\Message
{
    /**
     * 录制ID
     *
     * Generated from protobuf field <code>string record_id = 1;</code>
     */
    protected $record_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $record_id
     *           录制ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * 录制ID
     *
     * Generated from protobuf field <code>string record_id = 1;</code>
     * @return string
     */
    public function getRecordId()
    {
        return $this->record_id;
    }

    /**
     * 录制ID
     *
     * Generated from protobuf field <code>string record_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRecordId($var)
    {
        GPBUtil::checkString($var, True);
        $this->record_id = $var;

        return $this;
    }

}
