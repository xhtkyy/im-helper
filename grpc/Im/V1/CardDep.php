<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * CardDep 部门岗位信息
 *
 * Generated from protobuf message <code>im.v1.CardDep</code>
 */
class CardDep extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"id"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * &#64;gotags: json:"name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * &#64;gotags: json:"job_id"
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     */
    protected $job_id = '';
    /**
     * &#64;gotags: json:"job_name"
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     */
    protected $job_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           &#64;gotags: json:"id"
     *     @type string $name
     *           &#64;gotags: json:"name"
     *     @type string $job_id
     *           &#64;gotags: json:"job_id"
     *     @type string $job_name
     *           &#64;gotags: json:"job_name"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"id"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * &#64;gotags: json:"id"
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * &#64;gotags: json:"name"
     *
     * Generated from protobuf field <code>string name = 2;</code>
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
     * &#64;gotags: json:"job_id"
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     * @return string
     */
    public function getJobId()
    {
        return $this->job_id;
    }

    /**
     * &#64;gotags: json:"job_id"
     *
     * Generated from protobuf field <code>string job_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setJobId($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_id = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"job_name"
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @return string
     */
    public function getJobName()
    {
        return $this->job_name;
    }

    /**
     * &#64;gotags: json:"job_name"
     *
     * Generated from protobuf field <code>string job_name = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setJobName($var)
    {
        GPBUtil::checkString($var, True);
        $this->job_name = $var;

        return $this;
    }

}

