<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>iam.v1.DeviceType</code>
 */
class DeviceType
{
    /**
     * 网页
     *
     * Generated from protobuf enum <code>WEB = 0;</code>
     */
    const WEB = 0;
    /**
     * 便携设备上的网页
     *
     * Generated from protobuf enum <code>MOBI = 1;</code>
     */
    const MOBI = 1;
    /**
     * 便携设备
     *
     * Generated from protobuf enum <code>POCKET = 2;</code>
     */
    const POCKET = 2;
    /**
     * 台式电脑
     *
     * Generated from protobuf enum <code>PC = 3;</code>
     */
    const PC = 3;
    /**
     * 平板
     *
     * Generated from protobuf enum <code>PAD = 4;</code>
     */
    const PAD = 4;
    /**
     * 可穿戴设备
     *
     * Generated from protobuf enum <code>WEAR = 5;</code>
     */
    const WEAR = 5;

    private static $valueToName = [
        self::WEB => 'WEB',
        self::MOBI => 'MOBI',
        self::POCKET => 'POCKET',
        self::PC => 'PC',
        self::PAD => 'PAD',
        self::WEAR => 'WEAR',
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

