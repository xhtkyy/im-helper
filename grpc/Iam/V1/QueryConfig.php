<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.QueryConfig</code>
 */
class QueryConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * 配置类型
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     */
    protected $typ = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $typ
     *           配置类型
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * 配置类型
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     * @return string
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * 配置类型
     *
     * Generated from protobuf field <code>string typ = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTyp($var)
    {
        GPBUtil::checkString($var, True);
        $this->typ = $var;

        return $this;
    }

}
