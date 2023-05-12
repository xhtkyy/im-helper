<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 会话
 *
 * Generated from protobuf message <code>im.v1.Session</code>
 */
class Session extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     */
    protected $lid = 0;
    /**
     * 群组ID
     *
     * Generated from protobuf field <code>string group = 2;</code>
     */
    protected $group = '';
    /**
     * 会话标识，通道名
     *
     * Generated from protobuf field <code>string channel = 3;</code>
     */
    protected $channel = '';
    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>.im.v1.Session.Options options = 4;</code>
     */
    protected $options = null;
    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>bytes attachments = 5;</code>
     */
    protected $attachments = '';
    /**
     * 语言（如果有）
     *
     * Generated from protobuf field <code>string lang = 6;</code>
     */
    protected $lang = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lid
     *           &#64;gotags: gorm:"primaryKey"
     *     @type string $group
     *           群组ID
     *     @type string $channel
     *           会话标识，通道名
     *     @type \Im\V1\Session\Options $options
     *           &#64;gotags: gorm:"serializer:json"
     *     @type string $attachments
     *           &#64;gotags: gorm:"serializer:json"
     *     @type string $lang
     *           语言（如果有）
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: gorm:"primaryKey"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @return int|string
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * &#64;gotags: gorm:"primaryKey"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLid($var)
    {
        GPBUtil::checkInt64($var);
        $this->lid = $var;

        return $this;
    }

    /**
     * 群组ID
     *
     * Generated from protobuf field <code>string group = 2;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * 群组ID
     *
     * Generated from protobuf field <code>string group = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * 会话标识，通道名
     *
     * Generated from protobuf field <code>string channel = 3;</code>
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * 会话标识，通道名
     *
     * Generated from protobuf field <code>string channel = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>.im.v1.Session.Options options = 4;</code>
     * @return \Im\V1\Session\Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>.im.v1.Session.Options options = 4;</code>
     * @param \Im\V1\Session\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Session\Options::class);
        $this->options = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>bytes attachments = 5;</code>
     * @return string
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * &#64;gotags: gorm:"serializer:json"
     *
     * Generated from protobuf field <code>bytes attachments = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAttachments($var)
    {
        GPBUtil::checkString($var, False);
        $this->attachments = $var;

        return $this;
    }

    /**
     * 语言（如果有）
     *
     * Generated from protobuf field <code>string lang = 6;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * 语言（如果有）
     *
     * Generated from protobuf field <code>string lang = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

}

