<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>im.v1.NotifyTyp</code>
 */
class NotifyTyp
{
    /**
     * 知行提醒
     *
     * Generated from protobuf enum <code>APP_KNOW = 0;</code>
     */
    const APP_KNOW = 0;
    /**
     * 广场提醒
     *
     * Generated from protobuf enum <code>APP_SQUARE = 1;</code>
     */
    const APP_SQUARE = 1;
    /**
     * 全部提醒
     *
     * Generated from protobuf enum <code>APP_NOTIFY = 2;</code>
     */
    const APP_NOTIFY = 2;
    /**
     * 云盘提醒
     *
     * Generated from protobuf enum <code>APP_CLOUD_DISK = 3;</code>
     */
    const APP_CLOUD_DISK = 3;
    /**
     * 审批
     *
     * Generated from protobuf enum <code>APP_APPROVAL = 4;</code>
     */
    const APP_APPROVAL = 4;
    /**
     * 通讯录
     *
     * Generated from protobuf enum <code>APP_ADDRESS_BOOK = 5;</code>
     */
    const APP_ADDRESS_BOOK = 5;
    /**
     * 组织
     *
     * Generated from protobuf enum <code>APP_TEAMS = 6;</code>
     */
    const APP_TEAMS = 6;
    /**
     * 群组
     *
     * Generated from protobuf enum <code>APP_GROUPS = 7;</code>
     */
    const APP_GROUPS = 7;
    /**
     * 群成员
     *
     * Generated from protobuf enum <code>APP_MEMBERS = 8;</code>
     */
    const APP_MEMBERS = 8;
    /**
     * 单聊
     *
     * Generated from protobuf enum <code>APP_PAIRS = 9;</code>
     */
    const APP_PAIRS = 9;
    /**
     * 账号
     *
     * Generated from protobuf enum <code>APP_ACCOUNT = 10;</code>
     */
    const APP_ACCOUNT = 10;
    /**
     * 小秘书
     *
     * Generated from protobuf enum <code>APP_SECRETARY = 11;</code>
     */
    const APP_SECRETARY = 11;
    /**
     * 商务关系（删除商务关系申请）
     *
     * Generated from protobuf enum <code>APP_BUSINESS = 12;</code>
     */
    const APP_BUSINESS = 12;
    /**
     * 用户配置变更
     *
     * Generated from protobuf enum <code>APP_CONFIGS = 13;</code>
     */
    const APP_CONFIGS = 13;

    private static $valueToName = [
        self::APP_KNOW => 'APP_KNOW',
        self::APP_SQUARE => 'APP_SQUARE',
        self::APP_NOTIFY => 'APP_NOTIFY',
        self::APP_CLOUD_DISK => 'APP_CLOUD_DISK',
        self::APP_APPROVAL => 'APP_APPROVAL',
        self::APP_ADDRESS_BOOK => 'APP_ADDRESS_BOOK',
        self::APP_TEAMS => 'APP_TEAMS',
        self::APP_GROUPS => 'APP_GROUPS',
        self::APP_MEMBERS => 'APP_MEMBERS',
        self::APP_PAIRS => 'APP_PAIRS',
        self::APP_ACCOUNT => 'APP_ACCOUNT',
        self::APP_SECRETARY => 'APP_SECRETARY',
        self::APP_BUSINESS => 'APP_BUSINESS',
        self::APP_CONFIGS => 'APP_CONFIGS',
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

