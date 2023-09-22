<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.PSNAccount</code>
 */
class PSNAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string accountMobile = 1;</code>
     */
    protected $accountMobile = '';
    /**
     * Generated from protobuf field <code>string accountEmail = 2;</code>
     */
    protected $accountEmail = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $accountMobile
     *     @type string $accountEmail
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string accountMobile = 1;</code>
     * @return string
     */
    public function getAccountMobile()
    {
        return $this->accountMobile;
    }

    /**
     * Generated from protobuf field <code>string accountMobile = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountMobile($var)
    {
        GPBUtil::checkString($var, True);
        $this->accountMobile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string accountEmail = 2;</code>
     * @return string
     */
    public function getAccountEmail()
    {
        return $this->accountEmail;
    }

    /**
     * Generated from protobuf field <code>string accountEmail = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->accountEmail = $var;

        return $this;
    }

}

