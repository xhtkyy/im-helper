<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.ProofSchema</code>
 */
class ProofSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     */
    protected $ID = 0;
    /**
     * 全局标识符的类型，默认为自动识别，可用类型：0 表示第三方提供的标识符，1 表示手机号码，2 表示电子邮箱。同类可以被合并
     *
     * Generated from protobuf field <code>int64 type = 2;</code>
     */
    protected $type = 0;
    /**
     * 提供者
     *
     * Generated from protobuf field <code>string provider = 4;</code>
     */
    protected $provider = '';
    /**
     *主开放标识符
     *
     * Generated from protobuf field <code>string openid = 5 [(.validate.rules) = {</code>
     */
    protected $openid = '';
    /**
     * 可用的
     *
     * Generated from protobuf field <code>bool enabled = 6;</code>
     */
    protected $enabled = false;
    /**
     * 是否已通过校验
     *
     * Generated from protobuf field <code>bool verified = 7;</code>
     */
    protected $verified = false;
    /**
     * &#64;gotags: gorm:"autoCreateTime"
     *
     * Generated from protobuf field <code>int64 created = 8;</code>
     */
    protected $created = 0;
    /**
     * 最近访问时间戳
     *
     * Generated from protobuf field <code>int64 latest = 9;</code>
     */
    protected $latest = 0;
    /**
     * 区号
     *
     * Generated from protobuf field <code>string region = 10;</code>
     */
    protected $region = '';
    /**
     * 手机号
     *
     * Generated from protobuf field <code>string mobile = 11;</code>
     */
    protected $mobile = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $ID
     *           &#64;gotags: gorm:"primaryKey" json:"-"
     *     @type int|string $type
     *           全局标识符的类型，默认为自动识别，可用类型：0 表示第三方提供的标识符，1 表示手机号码，2 表示电子邮箱。同类可以被合并
     *     @type string $provider
     *           提供者
     *     @type string $openid
     *          主开放标识符
     *     @type bool $enabled
     *           可用的
     *     @type bool $verified
     *           是否已通过校验
     *     @type int|string $created
     *           &#64;gotags: gorm:"autoCreateTime"
     *     @type int|string $latest
     *           最近访问时间戳
     *     @type string $region
     *           区号
     *     @type string $mobile
     *           手机号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @return int|string
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 ID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setID($var)
    {
        GPBUtil::checkInt64($var);
        $this->ID = $var;

        return $this;
    }

    /**
     * 全局标识符的类型，默认为自动识别，可用类型：0 表示第三方提供的标识符，1 表示手机号码，2 表示电子邮箱。同类可以被合并
     *
     * Generated from protobuf field <code>int64 type = 2;</code>
     * @return int|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 全局标识符的类型，默认为自动识别，可用类型：0 表示第三方提供的标识符，1 表示手机号码，2 表示电子邮箱。同类可以被合并
     *
     * Generated from protobuf field <code>int64 type = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkInt64($var);
        $this->type = $var;

        return $this;
    }

    /**
     * 提供者
     *
     * Generated from protobuf field <code>string provider = 4;</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * 提供者
     *
     * Generated from protobuf field <code>string provider = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setProvider($var)
    {
        GPBUtil::checkString($var, True);
        $this->provider = $var;

        return $this;
    }

    /**
     *主开放标识符
     *
     * Generated from protobuf field <code>string openid = 5 [(.validate.rules) = {</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     *主开放标识符
     *
     * Generated from protobuf field <code>string openid = 5 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->openid = $var;

        return $this;
    }

    /**
     * 可用的
     *
     * Generated from protobuf field <code>bool enabled = 6;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * 可用的
     *
     * Generated from protobuf field <code>bool enabled = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * 是否已通过校验
     *
     * Generated from protobuf field <code>bool verified = 7;</code>
     * @return bool
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * 是否已通过校验
     *
     * Generated from protobuf field <code>bool verified = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setVerified($var)
    {
        GPBUtil::checkBool($var);
        $this->verified = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"autoCreateTime"
     *
     * Generated from protobuf field <code>int64 created = 8;</code>
     * @return int|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * &#64;gotags: gorm:"autoCreateTime"
     *
     * Generated from protobuf field <code>int64 created = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkInt64($var);
        $this->created = $var;

        return $this;
    }

    /**
     * 最近访问时间戳
     *
     * Generated from protobuf field <code>int64 latest = 9;</code>
     * @return int|string
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * 最近访问时间戳
     *
     * Generated from protobuf field <code>int64 latest = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatest($var)
    {
        GPBUtil::checkInt64($var);
        $this->latest = $var;

        return $this;
    }

    /**
     * 区号
     *
     * Generated from protobuf field <code>string region = 10;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * 区号
     *
     * Generated from protobuf field <code>string region = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * 手机号
     *
     * Generated from protobuf field <code>string mobile = 11;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 手机号
     *
     * Generated from protobuf field <code>string mobile = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

}

