<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.VoiceStreamRecordReq</code>
 */
class VoiceStreamRecordReq extends \Google\Protobuf\Internal\Message
{
    /**
     * 会议ID
     *
     * Generated from protobuf field <code>string room_id = 1;</code>
     */
    protected $room_id = '';
    /**
     * 录制操作
     *
     * Generated from protobuf field <code>.im.v1.VoiceStreamRecordOp op = 2;</code>
     */
    protected $op = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $room_id
     *           会议ID
     *     @type int $op
     *           录制操作
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * 会议ID
     *
     * Generated from protobuf field <code>string room_id = 1;</code>
     * @return string
     */
    public function getRoomId()
    {
        return $this->room_id;
    }

    /**
     * 会议ID
     *
     * Generated from protobuf field <code>string room_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRoomId($var)
    {
        GPBUtil::checkString($var, True);
        $this->room_id = $var;

        return $this;
    }

    /**
     * 录制操作
     *
     * Generated from protobuf field <code>.im.v1.VoiceStreamRecordOp op = 2;</code>
     * @return int
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * 录制操作
     *
     * Generated from protobuf field <code>.im.v1.VoiceStreamRecordOp op = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOp($var)
    {
        GPBUtil::checkEnum($var, \Im\V1\VoiceStreamRecordOp::class);
        $this->op = $var;

        return $this;
    }

}

