<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1\ID;

use UnexpectedValueException;

/**
 * Protobuf type <code>iam.v1.ID.Type</code>
 */
class Type
{
    /**
     * 未指定
     *
     * Generated from protobuf enum <code>Undefined = 0;</code>
     */
    const Undefined = 0;
    /**
     * 账号, 前缀 .
     *
     * Generated from protobuf enum <code>Account = 1;</code>
     */
    const Account = 1;
    /**
     * 员工, 前缀 #
     *
     * Generated from protobuf enum <code>Staff = 2;</code>
     */
    const Staff = 2;
    /**
     * 身份, 前缀 $
     *
     * Generated from protobuf enum <code>Rep = 3;</code>
     */
    const Rep = 3;
    /**
     * 组织, 前缀
     *
     * Generated from protobuf enum <code>Team = 4;</code>
     */
    const Team = 4;
    /**
     * 部门, 前缀
     *
     * Generated from protobuf enum <code>Department = 5;</code>
     */
    const Department = 5;

    private static $valueToName = [
        self::Undefined => 'Undefined',
        self::Account => 'Account',
        self::Staff => 'Staff',
        self::Rep => 'Rep',
        self::Team => 'Team',
        self::Department => 'Department',
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
class_alias(Type::class, \Iam\V1\ID_Type::class);

