<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/base.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.ReplyID</code>
 */
class ReplyID extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1 [(.validate.rules) = {</code>
     */
    protected $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1 [(.validate.rules) = {</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

