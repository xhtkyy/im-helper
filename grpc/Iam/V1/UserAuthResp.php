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
     * jwt令牌
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     */
    protected $jwt = '';
    /**
     * 扫码步骤
     *
     * Generated from protobuf field <code>string step = 2;</code>
     */
    protected $step = '';
    /**
     * 二维码code
     *
     * Generated from protobuf field <code>string code = 3;</code>
     */
    protected $code = '';
    /**
     * 取消操作
     *
     * Generated from protobuf field <code>bool cancel = 4;</code>
     */
    protected $cancel = false;
    /**
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 5;</code>
     */
    protected $rong_cloud_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jwt
     *           jwt令牌
     *     @type string $step
     *           扫码步骤
     *     @type string $code
     *           二维码code
     *     @type bool $cancel
     *           取消操作
     *     @type string $rong_cloud_token
     *           融云令牌
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * jwt令牌
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @return string
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * jwt令牌
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
     * 扫码步骤
     *
     * Generated from protobuf field <code>string step = 2;</code>
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * 扫码步骤
     *
     * Generated from protobuf field <code>string step = 2;</code>
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
     * 二维码code
     *
     * Generated from protobuf field <code>string code = 3;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 二维码code
     *
     * Generated from protobuf field <code>string code = 3;</code>
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
     * 取消操作
     *
     * Generated from protobuf field <code>bool cancel = 4;</code>
     * @return bool
     */
    public function getCancel()
    {
        return $this->cancel;
    }

    /**
     * 取消操作
     *
     * Generated from protobuf field <code>bool cancel = 4;</code>
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
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 5;</code>
     * @return string
     */
    public function getRongCloudToken()
    {
        return $this->rong_cloud_token;
    }

    /**
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 5;</code>
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
