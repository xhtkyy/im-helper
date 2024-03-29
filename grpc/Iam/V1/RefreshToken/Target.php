<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1\RefreshToken;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.RefreshToken.Target</code>
 */
class Target extends \Google\Protobuf\Internal\Message
{
    /**
     * 目标名：web=网页，pocket=移动应用，pc=桌面应用，me=当前请求的设备（默认）, all=全部
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           目标名：web=网页，pocket=移动应用，pc=桌面应用，me=当前请求的设备（默认）, all=全部
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 目标名：web=网页，pocket=移动应用，pc=桌面应用，me=当前请求的设备（默认）, all=全部
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * 目标名：web=网页，pocket=移动应用，pc=桌面应用，me=当前请求的设备（默认）, all=全部
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Target::class, \Iam\V1\RefreshToken_Target::class);

