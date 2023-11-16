<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.AuthorizeConfig</code>
 */
class AuthorizeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: json:"authorizedScopes"
     *
     * Generated from protobuf field <code>repeated string authorized_scopes = 1;</code>
     */
    private $authorized_scopes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $authorized_scopes
     *           &#64;gotags: json:"authorizedScopes"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: json:"authorizedScopes"
     *
     * Generated from protobuf field <code>repeated string authorized_scopes = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAuthorizedScopes()
    {
        return $this->authorized_scopes;
    }

    /**
     * &#64;gotags: json:"authorizedScopes"
     *
     * Generated from protobuf field <code>repeated string authorized_scopes = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAuthorizedScopes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->authorized_scopes = $arr;

        return $this;
    }

}

