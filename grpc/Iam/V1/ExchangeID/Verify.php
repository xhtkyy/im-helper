<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/Base.proto

namespace Iam\V1\ExchangeID;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 验证体
 *
 * Generated from protobuf message <code>iam.v1.ExchangeID.Verify</code>
 */
class Verify extends \Google\Protobuf\Internal\Message
{
    /**
     * 要验证的标识符
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID id = 1;</code>
     */
    protected $id = null;
    /**
     * 提供者服务应答的代码
     *
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * 请求的范围
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     */
    private $scopes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Iam\V1\ExchangeID $id
     *           要验证的标识符
     *     @type string $code
     *           提供者服务应答的代码
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $scopes
     *           请求的范围
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 要验证的标识符
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID id = 1;</code>
     * @return \Iam\V1\ExchangeID|null
     */
    public function getId()
    {
        return $this->id;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * 要验证的标识符
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID id = 1;</code>
     * @param \Iam\V1\ExchangeID $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\ExchangeID::class);
        $this->id = $var;

        return $this;
    }

    /**
     * 提供者服务应答的代码
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 提供者服务应答的代码
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
     * 请求的范围
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getScopes()
    {
        return $this->scopes;
    }

    /**
     * 请求的范围
     *
     * Generated from protobuf field <code>repeated string scopes = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->scopes = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Verify::class, \Iam\V1\ExchangeID_Verify::class);

