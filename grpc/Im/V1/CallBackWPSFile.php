<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/sync.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CallBackWPSFile 金山回调 获取文件信息
 *
 * Generated from protobuf message <code>im.v1.CallBackWPSFile</code>
 */
class CallBackWPSFile extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>int64 code = 1;</code>
     */
    protected $code = 0;
    /**
     * &#64;gotags: json:"data"
     *
     * Generated from protobuf field <code>.im.v1.WebOffice data = 2;</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $code
     *           &#64;gotags: json:"code"
     *     @type \Im\V1\WebOffice $data
     *           &#64;gotags: json:"data"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Sync::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @return int|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * &#64;gotags: json:"code"
     *
     * Generated from protobuf field <code>int64 code = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt64($var);
        $this->code = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"data"
     *
     * Generated from protobuf field <code>.im.v1.WebOffice data = 2;</code>
     * @return \Im\V1\WebOffice|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * &#64;gotags: json:"data"
     *
     * Generated from protobuf field <code>.im.v1.WebOffice data = 2;</code>
     * @param \Im\V1\WebOffice $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\WebOffice::class);
        $this->data = $var;

        return $this;
    }

}

