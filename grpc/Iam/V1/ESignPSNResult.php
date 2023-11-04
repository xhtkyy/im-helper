<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\v1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ESignPSNResult e签名宝，认证成功回调
 *
 * Generated from protobuf message <code>iam.v1.ESignPSNResult</code>
 */
class ESignPSNResult extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"action"
     *
     * Generated from protobuf field <code>string action = 1;</code>
     */
    protected $action = '';
    /**
     * &#64;gotags: json:"authFlowId"
     *
     * Generated from protobuf field <code>string authFlowId = 2;</code>
     */
    protected $authFlowId = '';
    /**
     * &#64;gotags: json:"timestamp"
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     */
    protected $timestamp = 0;
    /**
     * &#64;gotags: json:"authType"
     *
     * Generated from protobuf field <code>string authType = 4;</code>
     */
    protected $authType = '';
    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNInfo psnInfo = 5;</code>
     */
    protected $psnInfo = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $action
     *           &#64;gotags: json:"action"
     *     @type string $authFlowId
     *           &#64;gotags: json:"authFlowId"
     *     @type int|string $timestamp
     *           &#64;gotags: json:"timestamp"
     *     @type string $authType
     *           &#64;gotags: json:"authType"
     *     @type \Iam\v1\PSNInfo $psnInfo
     *           &#64;gotags: json:"psnInfo"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\v1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"action"
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * &#64;gotags: json:"action"
     *
     * Generated from protobuf field <code>string action = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->action = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"authFlowId"
     *
     * Generated from protobuf field <code>string authFlowId = 2;</code>
     * @return string
     */
    public function getAuthFlowId()
    {
        return $this->authFlowId;
    }

    /**
     * &#64;gotags: json:"authFlowId"
     *
     * Generated from protobuf field <code>string authFlowId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthFlowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->authFlowId = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"timestamp"
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * &#64;gotags: json:"timestamp"
     *
     * Generated from protobuf field <code>int64 timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"authType"
     *
     * Generated from protobuf field <code>string authType = 4;</code>
     * @return string
     */
    public function getAuthType()
    {
        return $this->authType;
    }

    /**
     * &#64;gotags: json:"authType"
     *
     * Generated from protobuf field <code>string authType = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthType($var)
    {
        GPBUtil::checkString($var, True);
        $this->authType = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNInfo psnInfo = 5;</code>
     * @return \Iam\v1\PSNInfo|null
     */
    public function getPsnInfo()
    {
        return $this->psnInfo;
    }

    public function hasPsnInfo()
    {
        return isset($this->psnInfo);
    }

    public function clearPsnInfo()
    {
        unset($this->psnInfo);
    }

    /**
     * &#64;gotags: json:"psnInfo"
     *
     * Generated from protobuf field <code>.iam.v1.PSNInfo psnInfo = 5;</code>
     * @param \Iam\v1\PSNInfo $var
     * @return $this
     */
    public function setPsnInfo($var)
    {
        GPBUtil::checkMessage($var, \Iam\v1\PSNInfo::class);
        $this->psnInfo = $var;

        return $this;
    }

}

