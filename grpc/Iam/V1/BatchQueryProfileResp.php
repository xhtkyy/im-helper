<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/unit.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.BatchQueryProfileResp</code>
 */
class BatchQueryProfileResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .iam.v1.ProfileSchema profiles = 1;</code>
     */
    private $profiles;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Iam\V1\ProfileSchema[]|\Google\Protobuf\Internal\RepeatedField $profiles
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .iam.v1.ProfileSchema profiles = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProfiles()
    {
        return $this->profiles;
    }

    /**
     * Generated from protobuf field <code>repeated .iam.v1.ProfileSchema profiles = 1;</code>
     * @param \Iam\V1\ProfileSchema[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProfiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Iam\V1\ProfileSchema::class);
        $this->profiles = $arr;

        return $this;
    }

}

