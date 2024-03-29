<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.MobileAuth</code>
 */
class MobileAuth extends \Google\Protobuf\Internal\Message
{
    /**
     * 国家区号
     *
     * Generated from protobuf field <code>string region = 1;</code>
     */
    protected $region = '';
    /**
     * 手机号
     *
     * Generated from protobuf field <code>string mobile = 2 [(.validate.rules) = {</code>
     */
    protected $mobile = '';
    /**
     * 手机验证码
     *
     * Generated from protobuf field <code>string code = 3;</code>
     */
    protected $code = '';
    /**
     * 密码
     *
     * Generated from protobuf field <code>string password = 4;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $region
     *           国家区号
     *     @type string $mobile
     *           手机号
     *     @type string $code
     *           手机验证码
     *     @type string $password
     *           密码
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 国家区号
     *
     * Generated from protobuf field <code>string region = 1;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * 国家区号
     *
     * Generated from protobuf field <code>string region = 1;</code>
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
     * Generated from protobuf field <code>string mobile = 2 [(.validate.rules) = {</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * 手机号
     *
     * Generated from protobuf field <code>string mobile = 2 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * 手机验证码
     *
     * Generated from protobuf field <code>string code = 3;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 手机验证码
     *
     * Generated from protobuf field <code>string code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * 密码
     *
     * Generated from protobuf field <code>string password = 4;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 密码
     *
     * Generated from protobuf field <code>string password = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->password = $var;

        return $this;
    }

}

