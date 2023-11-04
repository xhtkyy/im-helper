<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.AccountCheckResp</code>
 */
class AccountCheckResp extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags:json:"email"
     *
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * &#64;gotags:json:"mobile"
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
     */
    protected $mobile = '';
    /**
     * &#64;gotags:json:"region"
     *
     * Generated from protobuf field <code>string region = 3;</code>
     */
    protected $region = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *           &#64;gotags:json:"email"
     *     @type string $mobile
     *           &#64;gotags:json:"mobile"
     *     @type string $region
     *           &#64;gotags:json:"region"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags:json:"email"
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * &#64;gotags:json:"email"
     *
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * &#64;gotags:json:"mobile"
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * &#64;gotags:json:"mobile"
     *
     * Generated from protobuf field <code>string mobile = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->mobile = $var;

        return $this;
    }

    /**
     * &#64;gotags:json:"region"
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * &#64;gotags:json:"region"
     *
     * Generated from protobuf field <code>string region = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

}

