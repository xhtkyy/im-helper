<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.UserAuthResp</code>
 */
class UserAuthResp extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"jwt"
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     */
    protected $jwt = '';
    /**
     * &#64;gotags: json:"cancel"
     *
     * Generated from protobuf field <code>bool cancel = 2;</code>
     */
    protected $cancel = false;
    /**
     * &#64;gotags: json:"step"
     *
     * Generated from protobuf field <code>string step = 3;</code>
     */
    protected $step = '';
    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>string code = 4;</code>
     */
    protected $code = '';
    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 5;</code>
     */
    protected $openid = '';
    /**
     * &#64;gotags: json:"rong_cloud_token"
     *
     * Generated from protobuf field <code>string rong_cloud_token = 6;</code>
     */
    protected $rong_cloud_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jwt
     *           &#64;gotags: json:"jwt"
     *     @type bool $cancel
     *           &#64;gotags: json:"cancel"
     *     @type string $step
     *           &#64;gotags: json:"step"
     *     @type string $code
     *           &#64;gotags: json:"code"
     *     @type string $openid
     *           &#64;gotags: json:"openid"
     *     @type string $rong_cloud_token
     *           &#64;gotags: json:"rong_cloud_token"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"jwt"
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @return string
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * &#64;gotags: json:"jwt"
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJwt($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwt = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"cancel"
     *
     * Generated from protobuf field <code>bool cancel = 2;</code>
     * @return bool
     */
    public function getCancel()
    {
        return $this->cancel;
    }

    /**
     * &#64;gotags: json:"cancel"
     *
     * Generated from protobuf field <code>bool cancel = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setCancel($var)
    {
        GPBUtil::checkBool($var);
        $this->cancel = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"step"
     *
     * Generated from protobuf field <code>string step = 3;</code>
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * &#64;gotags: json:"step"
     *
     * Generated from protobuf field <code>string step = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStep($var)
    {
        GPBUtil::checkString($var, True);
        $this->step = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>string code = 4;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>string code = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->code = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 5;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOpenid($var)
    {
        GPBUtil::checkString($var, True);
        $this->openid = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"rong_cloud_token"
     *
     * Generated from protobuf field <code>string rong_cloud_token = 6;</code>
     * @return string
     */
    public function getRongCloudToken()
    {
        return $this->rong_cloud_token;
    }

    /**
     * &#64;gotags: json:"rong_cloud_token"
     *
     * Generated from protobuf field <code>string rong_cloud_token = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRongCloudToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->rong_cloud_token = $var;

        return $this;
    }

}

