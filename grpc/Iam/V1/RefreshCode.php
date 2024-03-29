<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.RefreshCode</code>
 */
class RefreshCode extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string code = 1;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string expire = 2;</code>
     */
    protected $expire = '';
    /**
     * Generated from protobuf field <code>string openid = 3;</code>
     */
    protected $openid = '';
    /**
     * Generated from protobuf field <code>string step = 4;</code>
     */
    protected $step = '';
    /**
     * Generated from protobuf field <code>bool remove_cancel = 5;</code>
     */
    protected $remove_cancel = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $code
     *     @type string $expire
     *     @type string $openid
     *     @type string $step
     *     @type bool $remove_cancel
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Generated from protobuf field <code>string code = 1;</code>
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
     * Generated from protobuf field <code>string expire = 2;</code>
     * @return string
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Generated from protobuf field <code>string expire = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setExpire($var)
    {
        GPBUtil::checkString($var, True);
        $this->expire = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string openid = 3;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Generated from protobuf field <code>string openid = 3;</code>
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
     * Generated from protobuf field <code>string step = 4;</code>
     * @return string
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * Generated from protobuf field <code>string step = 4;</code>
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
     * Generated from protobuf field <code>bool remove_cancel = 5;</code>
     * @return bool
     */
    public function getRemoveCancel()
    {
        return $this->remove_cancel;
    }

    /**
     * Generated from protobuf field <code>bool remove_cancel = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRemoveCancel($var)
    {
        GPBUtil::checkBool($var);
        $this->remove_cancel = $var;

        return $this;
    }

}

