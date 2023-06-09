<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1\Incoming;

use UnexpectedValueException;

/**
 * 操作系统推送模式
 *
 * Protobuf type <code>im.v1.Incoming.OSPushMode</code>
 */
class OSPushMode
{
    /**
     * 关闭，不推送
     *
     * Generated from protobuf enum <code>PUSH_OFF = 0;</code>
     */
    const PUSH_OFF = 0;
    /**
     * 打开，只在设备离线时推送
     *
     * Generated from protobuf enum <code>PUSH_OFFLINE = 1;</code>
     */
    const PUSH_OFFLINE = 1;
    /**
     * 打开，全量推送
     *
     * Generated from protobuf enum <code>PUSH_ALL = 2;</code>
     */
    const PUSH_ALL = 2;

    private static $valueToName = [
        self::PUSH_OFF => 'PUSH_OFF',
        self::PUSH_OFFLINE => 'PUSH_OFFLINE',
        self::PUSH_ALL => 'PUSH_ALL',
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
class_alias(OSPushMode::class, \Im\V1\Incoming_OSPushMode::class);

