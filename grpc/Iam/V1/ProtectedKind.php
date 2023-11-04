<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/Base.proto

namespace Iam\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>iam.v1.ProtectedKind</code>
 */
class ProtectedKind
{
    /**
     * Generated from protobuf enum <code>HTTP = 0;</code>
     */
    const HTTP = 0;
    /**
     * Generated from protobuf enum <code>GRPC = 1;</code>
     */
    const GRPC = 1;

    private static $valueToName = [
        self::HTTP => 'HTTP',
        self::GRPC => 'GRPC',
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

