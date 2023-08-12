<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>iam.v1.ConfigTyp</code>
 */
class ConfigTyp
{
    /**
     * 知行
     *
     * Generated from protobuf enum <code>APP_KNOW = 0;</code>
     */
    const APP_KNOW = 0;
    /**
     * 组织
     *
     * Generated from protobuf enum <code>APP_TEAMS = 1;</code>
     */
    const APP_TEAMS = 1;
    /**
     * 广场
     *
     * Generated from protobuf enum <code>APP_SQUARE = 2;</code>
     */
    const APP_SQUARE = 2;
    /**
     * 审批
     *
     * Generated from protobuf enum <code>APP_APPROVAL = 3;</code>
     */
    const APP_APPROVAL = 3;
    /**
     * 云盘
     *
     * Generated from protobuf enum <code>APP_CLOUD_DISK = 4;</code>
     */
    const APP_CLOUD_DISK = 4;
    /**
     * 通讯录
     *
     * Generated from protobuf enum <code>APP_ADDRESS_BOOK = 5;</code>
     */
    const APP_ADDRESS_BOOK = 5;
    /**
     * 添加方式
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_ADD = 6;</code>
     */
    const APP_ACCOUNT_ADD = 6;
    /**
     * 账号隐私
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_PRIVACY = 7;</code>
     */
    const APP_ACCOUNT_PRIVACY = 7;
    /**
     * 时区
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_TIMEZONE = 8;</code>
     */
    const APP_ACCOUNT_TIMEZONE = 8;
    /**
     * 账号启/停用
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_ENABLE = 9;</code>
     */
    const APP_ACCOUNT_ENABLE = 9;
    /**
     * 表情设置
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_EMO = 10;</code>
     */
    const APP_ACCOUNT_EMO = 10;
    /**
     * 图片设置
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_PICTURE = 11;</code>
     */
    const APP_ACCOUNT_PICTURE = 11;
    /**
     * 文件设置
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_FILE = 12;</code>
     */
    const APP_ACCOUNT_FILE = 12;
    /**
     * 地址设置
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_ADDRESS = 13;</code>
     */
    const APP_ACCOUNT_ADDRESS = 13;
    /**
     * 文字设置
     *
     * Generated from protobuf enum <code>APP_ACCOUNT_WORDS = 14;</code>
     */
    const APP_ACCOUNT_WORDS = 14;

    private static $valueToName = [
        self::APP_KNOW => 'APP_KNOW',
        self::APP_TEAMS => 'APP_TEAMS',
        self::APP_SQUARE => 'APP_SQUARE',
        self::APP_APPROVAL => 'APP_APPROVAL',
        self::APP_CLOUD_DISK => 'APP_CLOUD_DISK',
        self::APP_ADDRESS_BOOK => 'APP_ADDRESS_BOOK',
        self::APP_ACCOUNT_ADD => 'APP_ACCOUNT_ADD',
        self::APP_ACCOUNT_PRIVACY => 'APP_ACCOUNT_PRIVACY',
        self::APP_ACCOUNT_TIMEZONE => 'APP_ACCOUNT_TIMEZONE',
        self::APP_ACCOUNT_ENABLE => 'APP_ACCOUNT_ENABLE',
        self::APP_ACCOUNT_EMO => 'APP_ACCOUNT_EMO',
        self::APP_ACCOUNT_PICTURE => 'APP_ACCOUNT_PICTURE',
        self::APP_ACCOUNT_FILE => 'APP_ACCOUNT_FILE',
        self::APP_ACCOUNT_ADDRESS => 'APP_ACCOUNT_ADDRESS',
        self::APP_ACCOUNT_WORDS => 'APP_ACCOUNT_WORDS',
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
