<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.PSNAuthConfig</code>
 */
class PSNAuthConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"psnId"
     *
     * Generated from protobuf field <code>string psn_id = 1;</code>
     */
    protected $psn_id = '';
    /**
     * &#64;gotags: json:"psnAccount"
     *
     * Generated from protobuf field <code>string psn_account = 2;</code>
     */
    protected $psn_account = '';
    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNDetail psn_info = 3;</code>
     */
    protected $psn_info = null;
    /**
     * &#64;gotags: json:"psnAuthPageConfig"
     *
     * Generated from protobuf field <code>.iam.v1.PSNAuthPageConfig psn_auth_page_config = 4;</code>
     */
    protected $psn_auth_page_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $psn_id
     *           &#64;gotags: json:"psnId"
     *     @type string $psn_account
     *           &#64;gotags: json:"psnAccount"
     *     @type \Iam\V1\PSNDetail $psn_info
     *           &#64;gotags: json:"psnInfo"
     *     @type \Iam\V1\PSNAuthPageConfig $psn_auth_page_config
     *           &#64;gotags: json:"psnAuthPageConfig"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"psnId"
     *
     * Generated from protobuf field <code>string psn_id = 1;</code>
     * @return string
     */
    public function getPsnId()
    {
        return $this->psn_id;
    }

    /**
     * &#64;gotags: json:"psnId"
     *
     * Generated from protobuf field <code>string psn_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPsnId($var)
    {
        GPBUtil::checkString($var, True);
        $this->psn_id = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"psnAccount"
     *
     * Generated from protobuf field <code>string psn_account = 2;</code>
     * @return string
     */
    public function getPsnAccount()
    {
        return $this->psn_account;
    }

    /**
     * &#64;gotags: json:"psnAccount"
     *
     * Generated from protobuf field <code>string psn_account = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPsnAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->psn_account = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNDetail psn_info = 3;</code>
     * @return \Iam\V1\PSNDetail|null
     */
    public function getPsnInfo()
    {
        return $this->psn_info;
    }

    public function hasPsnInfo()
    {
        return isset($this->psn_info);
    }

    public function clearPsnInfo()
    {
        unset($this->psn_info);
    }

    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNDetail psn_info = 3;</code>
     * @param \Iam\V1\PSNDetail $var
     * @return $this
     */
    public function setPsnInfo($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\PSNDetail::class);
        $this->psn_info = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"psnAuthPageConfig"
     *
     * Generated from protobuf field <code>.iam.v1.PSNAuthPageConfig psn_auth_page_config = 4;</code>
     * @return \Iam\V1\PSNAuthPageConfig|null
     */
    public function getPsnAuthPageConfig()
    {
        return $this->psn_auth_page_config;
    }

    public function hasPsnAuthPageConfig()
    {
        return isset($this->psn_auth_page_config);
    }

    public function clearPsnAuthPageConfig()
    {
        unset($this->psn_auth_page_config);
    }

    /**
     * &#64;gotags: json:"psnAuthPageConfig"
     *
     * Generated from protobuf field <code>.iam.v1.PSNAuthPageConfig psn_auth_page_config = 4;</code>
     * @param \Iam\V1\PSNAuthPageConfig $var
     * @return $this
     */
    public function setPsnAuthPageConfig($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\PSNAuthPageConfig::class);
        $this->psn_auth_page_config = $var;

        return $this;
    }

}

