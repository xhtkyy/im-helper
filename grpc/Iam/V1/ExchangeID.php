<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/Base.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 交换标识号，即外来标识号，包括手机号、邮箱、身份证号，其它非本系统授予的标识号，
 * 也包括第三方身份提供者提供的标识号
 *
 * Generated from protobuf message <code>iam.v1.ExchangeID</code>
 */
class ExchangeID extends \Google\Protobuf\Internal\Message
{
    /**
     * 内置类型，非内置类型指定 provider
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID.Type type = 1;</code>
     */
    protected $type = 0;
    /**
     * 提供者标识符，非预定义的提供者需要提供名字
     *
     * Generated from protobuf field <code>string provider = 2 [(.validate.rules) = {</code>
     */
    protected $provider = '';
    /**
     * 标识号
     *
     * Generated from protobuf field <code>string id = 3 [(.validate.rules) = {</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           内置类型，非内置类型指定 provider
     *     @type string $provider
     *           提供者标识符，非预定义的提供者需要提供名字
     *     @type string $id
     *           标识号
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 内置类型，非内置类型指定 provider
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * 内置类型，非内置类型指定 provider
     *
     * Generated from protobuf field <code>.iam.v1.ExchangeID.Type type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Iam\V1\ExchangeID\Type::class);
        $this->type = $var;

        return $this;
    }

    /**
     * 提供者标识符，非预定义的提供者需要提供名字
     *
     * Generated from protobuf field <code>string provider = 2 [(.validate.rules) = {</code>
     * @return string
     */
    public function getProvider()
    {
        return $this->provider;
    }

    /**
     * 提供者标识符，非预定义的提供者需要提供名字
     *
     * Generated from protobuf field <code>string provider = 2 [(.validate.rules) = {</code>
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
     * 标识号
     *
     * Generated from protobuf field <code>string id = 3 [(.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * 标识号
     *
     * Generated from protobuf field <code>string id = 3 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

