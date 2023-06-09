<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1\Data;

use UnexpectedValueException;

/**
 * Protobuf type <code>im.v1.Data.Category</code>
 */
class Category
{
    /**
     * 根据键名
     *
     * Generated from protobuf enum <code>BY_KEY = 0;</code>
     */
    const BY_KEY = 0;
    /**
     * 用户对消息的检查点基数
     *
     * Generated from protobuf enum <code>CHECKPOINT = 1;</code>
     */
    const CHECKPOINT = 1;
    /**
     * 用户设置
     *
     * Generated from protobuf enum <code>SETTINGS = 2;</code>
     */
    const SETTINGS = 2;

    private static $valueToName = [
        self::BY_KEY => 'BY_KEY',
        self::CHECKPOINT => 'CHECKPOINT',
        self::SETTINGS => 'SETTINGS',
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
class_alias(Category::class, \Im\V1\Data_Category::class);

