<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.AreaCodeSchema</code>
 */
class AreaCodeSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     */
    protected $openid = '';
    /**
     * Generated from protobuf field <code>string code = 3;</code>
     */
    protected $code = '';
    /**
     * Generated from protobuf field <code>string area = 4;</code>
     */
    protected $area = '';
    /**
     * Generated from protobuf field <code>string name = 5;</code>
     */
    protected $name = '';
    /**
     * 热门标记
     *
     * Generated from protobuf field <code>bool mark = 6;</code>
     */
    protected $mark = false;
    /**
     * Generated from protobuf field <code>int64 create_at = 7;</code>
     */
    protected $create_at = 0;
    /**
     * Generated from protobuf field <code>int64 update_at = 8;</code>
     */
    protected $update_at = 0;
    /**
     * Generated from protobuf field <code>int64 delete_at = 9;</code>
     */
    protected $delete_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *     @type string $openid
     *     @type string $code
     *     @type string $area
     *     @type string $name
     *     @type bool $mark
     *           热门标记
     *     @type int|string $create_at
     *     @type int|string $update_at
     *     @type int|string $delete_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * Generated from protobuf field <code>string openid = 2;</code>
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
     * Generated from protobuf field <code>string code = 3;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
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
     * Generated from protobuf field <code>string area = 4;</code>
     * @return string
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Generated from protobuf field <code>string area = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->area = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * 热门标记
     *
     * Generated from protobuf field <code>bool mark = 6;</code>
     * @return bool
     */
    public function getMark()
    {
        return $this->mark;
    }

    /**
     * 热门标记
     *
     * Generated from protobuf field <code>bool mark = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setMark($var)
    {
        GPBUtil::checkBool($var);
        $this->mark = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 create_at = 7;</code>
     * @return int|string
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * Generated from protobuf field <code>int64 create_at = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 update_at = 8;</code>
     * @return int|string
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Generated from protobuf field <code>int64 update_at = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->update_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 delete_at = 9;</code>
     * @return int|string
     */
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    /**
     * Generated from protobuf field <code>int64 delete_at = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeleteAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->delete_at = $var;

        return $this;
    }

}

