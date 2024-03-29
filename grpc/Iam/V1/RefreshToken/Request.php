<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1\RefreshToken;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 刷新请求
 *
 * Generated from protobuf message <code>iam.v1.RefreshToken.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * 用户开放标识符
     *
     * Generated from protobuf field <code>string openid = 1 [(.validate.rules) = {</code>
     */
    protected $openid = '';
    /**
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string nonce = 3;</code>
     */
    protected $nonce = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $openid
     *           用户开放标识符
     *     @type string $code
     *     @type string $nonce
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 用户开放标识符
     *
     * Generated from protobuf field <code>string openid = 1 [(.validate.rules) = {</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * 用户开放标识符
     *
     * Generated from protobuf field <code>string openid = 1 [(.validate.rules) = {</code>
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
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
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
     * Generated from protobuf field <code>string nonce = 3;</code>
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Generated from protobuf field <code>string nonce = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkString($var, True);
        $this->nonce = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Request::class, \Iam\V1\RefreshToken_Request::class);

