<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.SendVerifyCode</code>
 */
class SendVerifyCode extends \Google\Protobuf\Internal\Message
{
    /**
     * 根据类型选择消息模版
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     */
    protected $typ = '';
    protected $raw;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $typ
     *           根据类型选择消息模版
     *     @type \Iam\v1\EmailAuth $email
     *     @type \Iam\v1\MobileAuth $mobile
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\v1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 根据类型选择消息模版
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * 根据类型选择消息模版
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTyp($var)
    {
        GPBUtil::checkString($var, True);
        $this->typ = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.iam.v1.EmailAuth email = 2;</code>
     * @return \Iam\v1\EmailAuth|null
     */
    public function getEmail()
    {
        return $this->readOneof(2);
    }

    public function hasEmail()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.iam.v1.EmailAuth email = 2;</code>
     * @param \Iam\v1\EmailAuth $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkMessage($var, \Iam\v1\EmailAuth::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.iam.v1.MobileAuth mobile = 3;</code>
     * @return \Iam\v1\MobileAuth|null
     */
    public function getMobile()
    {
        return $this->readOneof(3);
    }

    public function hasMobile()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.iam.v1.MobileAuth mobile = 3;</code>
     * @param \Iam\v1\MobileAuth $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkMessage($var, \Iam\v1\MobileAuth::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRaw()
    {
        return $this->whichOneof("raw");
    }

}

