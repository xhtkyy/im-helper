<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.AccountDeleteResp</code>
 */
class AccountDeleteResp extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags:json:"err_reasons"
     *
     * Generated from protobuf field <code>repeated string err_reasons = 1;</code>
     */
    private $err_reasons;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $err_reasons
     *           &#64;gotags:json:"err_reasons"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\v1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags:json:"err_reasons"
     *
     * Generated from protobuf field <code>repeated string err_reasons = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getErrReasons()
    {
        return $this->err_reasons;
    }

    /**
     * &#64;gotags:json:"err_reasons"
     *
     * Generated from protobuf field <code>repeated string err_reasons = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setErrReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->err_reasons = $arr;

        return $this;
    }

}

