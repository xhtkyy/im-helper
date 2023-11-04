<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/Base.proto

namespace Iam\V1\ExchangeID;

use UnexpectedValueException;

/**
 * 外部标识号
 *
 * Protobuf type <code>iam.v1.ExchangeID.Type</code>
 */
class Type
{
    /**
     * 未知的，非权威标识号
     *
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * 移动电话号码
     *
     * Generated from protobuf enum <code>Cellphone = 1;</code>
     */
    const Cellphone = 1;
    /**
     * 非移动电话号码
     *
     * Generated from protobuf enum <code>Telephone = 2;</code>
     */
    const Telephone = 2;
    /**
     * 电子邮箱地址
     *
     * Generated from protobuf enum <code>Email = 3;</code>
     */
    const Email = 3;
    /**
     * 法定身份证件号码
     *
     * Generated from protobuf enum <code>ID = 4;</code>
     */
    const ID = 4;
    /**
     * 微信认证集成
     *
     * Generated from protobuf enum <code>WeChat = 5;</code>
     */
    const WeChat = 5;
    /**
     * Google 认证集成
     *
     * Generated from protobuf enum <code>Google = 6;</code>
     */
    const Google = 6;
    /**
     * 苹果认证集成
     *
     * Generated from protobuf enum <code>Apple = 7;</code>
     */
    const Apple = 7;
    /**
     * 其它 OpenID 提供者
     *
     * Generated from protobuf enum <code>OpenID = 8;</code>
     */
    const OpenID = 8;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Cellphone => 'Cellphone',
        self::Telephone => 'Telephone',
        self::Email => 'Email',
        self::ID => 'ID',
        self::WeChat => 'WeChat',
        self::Google => 'Google',
        self::Apple => 'Apple',
        self::OpenID => 'OpenID',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Iam\V1\ExchangeID_Type::class);

