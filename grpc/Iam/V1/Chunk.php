<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 数据分片信息，可用于数据分页/分块/分片等
 *
 * Generated from protobuf message <code>iam.v1.Chunk</code>
 */
class Chunk extends \Google\Protobuf\Internal\Message
{
    /**
     * 分片开始的实际偏移量，可能不同于请求体中的 offset
     *
     * Generated from protobuf field <code>uint32 number = 1;</code>
     */
    protected $number = 0;
    /**
     * 数据分片的实际大小，可能不同于请求体中的 size
     *
     * Generated from protobuf field <code>uint32 size = 2;</code>
     */
    protected $size = 0;
    /**
     * 未分片时的数据记录总数
     *
     * Generated from protobuf field <code>uint32 total = 3;</code>
     */
    protected $total = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $number
     *           分片开始的实际偏移量，可能不同于请求体中的 offset
     *     @type int $size
     *           数据分片的实际大小，可能不同于请求体中的 size
     *     @type int $total
     *           未分片时的数据记录总数
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 分片开始的实际偏移量，可能不同于请求体中的 offset
     *
     * Generated from protobuf field <code>uint32 number = 1;</code>
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * 分片开始的实际偏移量，可能不同于请求体中的 offset
     *
     * Generated from protobuf field <code>uint32 number = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkUint32($var);
        $this->number = $var;

        return $this;
    }

    /**
     * 数据分片的实际大小，可能不同于请求体中的 size
     *
     * Generated from protobuf field <code>uint32 size = 2;</code>
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * 数据分片的实际大小，可能不同于请求体中的 size
     *
     * Generated from protobuf field <code>uint32 size = 2;</code>
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
     * 未分片时的数据记录总数
     *
     * Generated from protobuf field <code>uint32 total = 3;</code>
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * 未分片时的数据记录总数
     *
     * Generated from protobuf field <code>uint32 total = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTotal($var)
    {
        GPBUtil::checkUint32($var);
        $this->total = $var;

        return $this;
    }

}

