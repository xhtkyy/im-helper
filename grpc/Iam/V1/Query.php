<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 数据查询
 *
 * Generated from protobuf message <code>iam.v1.Query</code>
 */
class Query extends \Google\Protobuf\Internal\Message
{
    /**
     * 指定获取的字段列表
     *
     * Generated from protobuf field <code>repeated string fields = 1;</code>
     */
    private $fields;
    /**
     * 筛选规则，规则内的数据被选择
     *
     * Generated from protobuf field <code>.iam.v1.Filter.Rule filters = 2;</code>
     */
    protected $filters = null;
    /**
     * 排序
     *
     * Generated from protobuf field <code>repeated .iam.v1.OrderBy order_by = 3;</code>
     */
    private $order_by;
    /**
     * 结果数据分片
     *
     * Generated from protobuf field <code>.iam.v1.Chunk.Request chunking = 4;</code>
     */
    protected $chunking = null;
    /**
     * 分组规则
     *
     * Generated from protobuf field <code>.google.protobuf.Any group_by = 5;</code>
     */
    protected $group_by = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $fields
     *           指定获取的字段列表
     *     @type \Iam\V1\Filter\Rule $filters
     *           筛选规则，规则内的数据被选择
     *     @type \Iam\V1\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $order_by
     *           排序
     *     @type \Iam\V1\Chunk\Request $chunking
     *           结果数据分片
     *     @type \Google\Protobuf\Any $group_by
     *           分组规则
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 指定获取的字段列表
     *
     * Generated from protobuf field <code>repeated string fields = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * 指定获取的字段列表
     *
     * Generated from protobuf field <code>repeated string fields = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFields($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->fields = $arr;

        return $this;
    }

    /**
     * 筛选规则，规则内的数据被选择
     *
     * Generated from protobuf field <code>.iam.v1.Filter.Rule filters = 2;</code>
     * @return \Iam\V1\Filter\Rule|null
     */
    public function getFilters()
    {
        return $this->filters;
    }

    public function hasFilters()
    {
        return isset($this->filters);
    }

    public function clearFilters()
    {
        unset($this->filters);
    }

    /**
     * 筛选规则，规则内的数据被选择
     *
     * Generated from protobuf field <code>.iam.v1.Filter.Rule filters = 2;</code>
     * @param \Iam\V1\Filter\Rule $var
     * @return $this
     */
    public function setFilters($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\Filter\Rule::class);
        $this->filters = $var;

        return $this;
    }

    /**
     * 排序
     *
     * Generated from protobuf field <code>repeated .iam.v1.OrderBy order_by = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * 排序
     *
     * Generated from protobuf field <code>repeated .iam.v1.OrderBy order_by = 3;</code>
     * @param \Iam\V1\OrderBy[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setOrderBy($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Iam\V1\OrderBy::class);
        $this->order_by = $arr;

        return $this;
    }

    /**
     * 结果数据分片
     *
     * Generated from protobuf field <code>.iam.v1.Chunk.Request chunking = 4;</code>
     * @return \Iam\V1\Chunk\Request|null
     */
    public function getChunking()
    {
        return $this->chunking;
    }

    public function hasChunking()
    {
        return isset($this->chunking);
    }

    public function clearChunking()
    {
        unset($this->chunking);
    }

    /**
     * 结果数据分片
     *
     * Generated from protobuf field <code>.iam.v1.Chunk.Request chunking = 4;</code>
     * @param \Iam\V1\Chunk\Request $var
     * @return $this
     */
    public function setChunking($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\Chunk\Request::class);
        $this->chunking = $var;

        return $this;
    }

    /**
     * 分组规则
     *
     * Generated from protobuf field <code>.google.protobuf.Any group_by = 5;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getGroupBy()
    {
        return $this->group_by;
    }

    public function hasGroupBy()
    {
        return isset($this->group_by);
    }

    public function clearGroupBy()
    {
        unset($this->group_by);
    }

    /**
     * 分组规则
     *
     * Generated from protobuf field <code>.google.protobuf.Any group_by = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setGroupBy($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->group_by = $var;

        return $this;
    }

}

