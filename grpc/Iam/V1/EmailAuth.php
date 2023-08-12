<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.EmailAuth</code>
 */
class EmailAuth extends \Google\Protobuf\Internal\Message
{
    /**
     * e-mail地址
     *
     * Generated from protobuf field <code>string mail = 1;</code>
     */
    protected $mail = '';
    /**
     * 验证码
     *
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * 密码
     *
     * Generated from protobuf field <code>string password = 3;</code>
     */
    protected $password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $mail
     *           e-mail地址
     *     @type string $code
     *           验证码
     *     @type string $password
     *           密码
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * e-mail地址
     *
     * Generated from protobuf field <code>string mail = 1;</code>
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * e-mail地址
     *
     * Generated from protobuf field <code>string mail = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMail($var)
    {
        GPBUtil::checkString($var, True);
        $this->mail = $var;

        return $this;
    }

    /**
     * 验证码
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 验证码
     *
     * Generated from protobuf field <code>string code = 2;</code>
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
     * Generated from protobuf field <code>string password = 3;</code>
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * 密码
     *
     * Generated from protobuf field <code>string password = 3;</code>
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
