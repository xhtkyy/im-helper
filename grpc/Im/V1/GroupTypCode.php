<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use UnexpectedValueException;

/**
 * GroupTypCode 群类型
 *
 * Protobuf type <code>im.v1.GroupTypCode</code>
 */
class GroupTypCode
{
    /**
     * 普通群
     *
     * Generated from protobuf enum <code>NORMAL = 0;</code>
     */
    const NORMAL = 0;
    /**
     * 部门群
     *
     * Generated from protobuf enum <code>DEPARTMENT = 1;</code>
     */
    const DEPARTMENT = 1;
    /**
     * 公司群
     *
     * Generated from protobuf enum <code>COMPANY = 2;</code>
     */
    const COMPANY = 2;
    /**
     * 内部群
     *
     * Generated from protobuf enum <code>INNER = 3;</code>
     */
    const INNER = 3;
    /**
     * 知行助手
     *
     * Generated from protobuf enum <code>KNOW = 4;</code>
     */
    const KNOW = 4;
    /**
     * 云盘助手
     *
     * Generated from protobuf enum <code>CLOUD_DISK = 5;</code>
     */
    const CLOUD_DISK = 5;
    /**
     * 审批助手
     *
     * Generated from protobuf enum <code>APPROVAL = 6;</code>
     */
    const APPROVAL = 6;
    /**
     * 广场助手
     *
     * Generated from protobuf enum <code>SQUARE = 7;</code>
     */
    const SQUARE = 7;
    /**
     * 单聊申请
     *
     * Generated from protobuf enum <code>APPLY_PAIR = 8;</code>
     */
    const APPLY_PAIR = 8;
    /**
     * 小秘书
     *
     * Generated from protobuf enum <code>SECRETARY = 9;</code>
     */
    const SECRETARY = 9;
    /**
     * 外部群
     *
     * Generated from protobuf enum <code>OUT = 10;</code>
     */
    const OUT = 10;
    /**
     * 商务关系解除申请
     *
     * Generated from protobuf enum <code>APPLY_BUSINESS_CANCEL = 11;</code>
     */
    const APPLY_BUSINESS_CANCEL = 11;
    /**
     * 新成员申请
     *
     * Generated from protobuf enum <code>APPLY_TEAM = 12;</code>
     */
    const APPLY_TEAM = 12;
    /**
     * 工作通知
     *
     * Generated from protobuf enum <code>WORK_NOTIFY = 13;</code>
     */
    const WORK_NOTIFY = 13;

    private static $valueToName = [
        self::NORMAL => 'NORMAL',
        self::DEPARTMENT => 'DEPARTMENT',
        self::COMPANY => 'COMPANY',
        self::INNER => 'INNER',
        self::KNOW => 'KNOW',
        self::CLOUD_DISK => 'CLOUD_DISK',
        self::APPROVAL => 'APPROVAL',
        self::SQUARE => 'SQUARE',
        self::APPLY_PAIR => 'APPLY_PAIR',
        self::SECRETARY => 'SECRETARY',
        self::OUT => 'OUT',
        self::APPLY_BUSINESS_CANCEL => 'APPLY_BUSINESS_CANCEL',
        self::APPLY_TEAM => 'APPLY_TEAM',
        self::WORK_NOTIFY => 'WORK_NOTIFY',
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

