<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 访问凭证
 *
 * Generated from protobuf message <code>iam.v1.AccessTokenV2</code>
 */
class AccessTokenV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * JWT 字符串
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     */
    protected $jwt = '';
    /**
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 7;</code>
     */
    protected $rong_cloud_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $jwt
     *           JWT 字符串
     *     @type string $rong_cloud_token
     *           融云令牌
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * JWT 字符串
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @return string
     */
    public function getJwt()
    {
        return $this->jwt;
    }

    /**
     * JWT 字符串
     *
     * Generated from protobuf field <code>string jwt = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setJwt($var)
    {
        GPBUtil::checkString($var, True);
        $this->jwt = $var;

        return $this;
    }

    /**
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 7;</code>
     * @return string
     */
    public function getRongCloudToken()
    {
        return $this->rong_cloud_token;
    }

    /**
     * 融云令牌
     *
     * Generated from protobuf field <code>string rong_cloud_token = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setRongCloudToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->rong_cloud_token = $var;

        return $this;
    }

}

