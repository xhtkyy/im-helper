<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.TimeResp</code>
 */
class TimeResp extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"at"
     *
     * Generated from protobuf field <code>int64 at = 1;</code>
     */
    protected $at = 0;
    /**
     * &#64;gotags: json:"done"
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     */
    protected $done = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $at
     *           &#64;gotags: json:"at"
     *     @type bool $done
     *           &#64;gotags: json:"done"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"at"
     *
     * Generated from protobuf field <code>int64 at = 1;</code>
     * @return int|string
     */
    public function getAt()
    {
        return $this->at;
    }

    /**
     * &#64;gotags: json:"at"
     *
     * Generated from protobuf field <code>int64 at = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->at = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"done"
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     * @return bool
     */
    public function getDone()
    {
        return $this->done;
    }

    /**
     * &#64;gotags: json:"done"
     *
     * Generated from protobuf field <code>bool done = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDone($var)
    {
        GPBUtil::checkBool($var);
        $this->done = $var;

        return $this;
    }

}

