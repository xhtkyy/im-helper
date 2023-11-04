<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\v1;

use UnexpectedValueException;

/**
 * Protobuf type <code>iam.v1.VerifyCodeTyp</code>
 */
class VerifyCodeTyp
{
    /**
     * Generated from protobuf enum <code>REGISTER = 0;</code>
     */
    const REGISTER = 0;
    /**
     * Generated from protobuf enum <code>LOGIN = 1;</code>
     */
    const LOGIN = 1;
    /**
     * Generated from protobuf enum <code>ACCOUNT_CHANGE = 2;</code>
     */
    const ACCOUNT_CHANGE = 2;
    /**
     * Generated from protobuf enum <code>ORG_JOIN = 3;</code>
     */
    const ORG_JOIN = 3;

    private static $valueToName = [
        self::REGISTER => 'REGISTER',
        self::LOGIN => 'LOGIN',
        self::ACCOUNT_CHANGE => 'ACCOUNT_CHANGE',
        self::ORG_JOIN => 'ORG_JOIN',
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

