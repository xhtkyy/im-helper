<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1\Chunk;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 分片请求，在提交查询时使用，Chunk 为响应体
 *
 * Generated from protobuf message <code>iam.v1.Chunk.Request</code>
 */
class Request extends \Google\Protobuf\Internal\Message
{
    /**
     * 指定一个分片尺寸开始请求
     *
     * Generated from protobuf field <code>uint32 size = 1 [(.validate.rules) = {</code>
     */
    protected $size = 0;
    /**
     * Generated from protobuf field <code>uint32 number = 2 [(.validate.rules) = {</code>
     */
    protected $number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $size
     *           指定一个分片尺寸开始请求
     *     @type int $number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 指定一个分片尺寸开始请求
     *
     * Generated from protobuf field <code>uint32 size = 1 [(.validate.rules) = {</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * 指定一个分片尺寸开始请求
     *
     * Generated from protobuf field <code>uint32 size = 1 [(.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkUint32($var);
        $this->size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 2 [(.validate.rules) = {</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Generated from protobuf field <code>uint32 number = 2 [(.validate.rules) = {</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Request::class, \Iam\V1\Chunk_Request::class);

