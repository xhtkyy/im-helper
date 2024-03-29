<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.UserAuth</code>
 */
class UserAuth extends \Google\Protobuf\Internal\Message
{
    /**
     * 登陆应用
     *
     * Generated from protobuf field <code>string app = 5;</code>
     */
    protected $app = '';
    /**
     * 登陆区域
     *
     * Generated from protobuf field <code>string zone = 6;</code>
     */
    protected $zone = '';
    /**
     * 登陆平台, PC、WEB、POCKET
     *
     * Generated from protobuf field <code>string platform = 7;</code>
     */
    protected $platform = '';
    protected $raw;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Iam\V1\MobileAuth $ma
     *           手机号登陆认证
     *     @type \Iam\V1\AccountAuth $aa
     *           账号密码登陆认证
     *     @type \Iam\V1\EmailAuth $ea
     *           邮箱登陆
     *     @type \Iam\V1\QRCodeAuth $qrc
     *           二维码登陆
     *     @type string $app
     *           登陆应用
     *     @type string $zone
     *           登陆区域
     *     @type string $platform
     *           登陆平台, PC、WEB、POCKET
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 手机号登陆认证
     *
     * Generated from protobuf field <code>.iam.v1.MobileAuth ma = 1;</code>
     * @return \Iam\V1\MobileAuth|null
     */
    public function getMa()
    {
        return $this->readOneof(1);
    }

    public function hasMa()
    {
        return $this->hasOneof(1);
    }

    /**
     * 手机号登陆认证
     *
     * Generated from protobuf field <code>.iam.v1.MobileAuth ma = 1;</code>
     * @param \Iam\V1\MobileAuth $var
     * @return $this
     */
    public function setMa($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\MobileAuth::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * 账号密码登陆认证
     *
     * Generated from protobuf field <code>.iam.v1.AccountAuth aa = 2;</code>
     * @return \Iam\V1\AccountAuth|null
     */
    public function getAa()
    {
        return $this->readOneof(2);
    }

    public function hasAa()
    {
        return $this->hasOneof(2);
    }

    /**
     * 账号密码登陆认证
     *
     * Generated from protobuf field <code>.iam.v1.AccountAuth aa = 2;</code>
     * @param \Iam\V1\AccountAuth $var
     * @return $this
     */
    public function setAa($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\AccountAuth::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * 邮箱登陆
     *
     * Generated from protobuf field <code>.iam.v1.EmailAuth ea = 3;</code>
     * @return \Iam\V1\EmailAuth|null
     */
    public function getEa()
    {
        return $this->readOneof(3);
    }

    public function hasEa()
    {
        return $this->hasOneof(3);
    }

    /**
     * 邮箱登陆
     *
     * Generated from protobuf field <code>.iam.v1.EmailAuth ea = 3;</code>
     * @param \Iam\V1\EmailAuth $var
     * @return $this
     */
    public function setEa($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\EmailAuth::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * 二维码登陆
     *
     * Generated from protobuf field <code>.iam.v1.QRCodeAuth qrc = 4;</code>
     * @return \Iam\V1\QRCodeAuth|null
     */
    public function getQrc()
    {
        return $this->readOneof(4);
    }

    public function hasQrc()
    {
        return $this->hasOneof(4);
    }

    /**
     * 二维码登陆
     *
     * Generated from protobuf field <code>.iam.v1.QRCodeAuth qrc = 4;</code>
     * @param \Iam\V1\QRCodeAuth $var
     * @return $this
     */
    public function setQrc($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\QRCodeAuth::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * 登陆应用
     *
     * Generated from protobuf field <code>string app = 5;</code>
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * 登陆应用
     *
     * Generated from protobuf field <code>string app = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkString($var, True);
        $this->app = $var;

        return $this;
    }

    /**
     * 登陆区域
     *
     * Generated from protobuf field <code>string zone = 6;</code>
     * @return string
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * 登陆区域
     *
     * Generated from protobuf field <code>string zone = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->zone = $var;

        return $this;
    }

    /**
     * 登陆平台, PC、WEB、POCKET
     *
     * Generated from protobuf field <code>string platform = 7;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * 登陆平台, PC、WEB、POCKET
     *
     * Generated from protobuf field <code>string platform = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

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

