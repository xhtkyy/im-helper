<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>im.v1.GeoGroupJoinReq</code>
 */
class GeoGroupJoinReq extends \Google\Protobuf\Internal\Message
{
    /**
     * 定位点
     *
     * Generated from protobuf field <code>.im.v1.Geo geo = 1;</code>
     */
    protected $geo = null;
    /**
     * 口令
     *
     * Generated from protobuf field <code>string code = 2;</code>
     */
    protected $code = '';
    /**
     * 身份卡ID
     *
     * Generated from protobuf field <code>string card_id = 3;</code>
     */
    protected $card_id = '';
    /**
     * 组织ID
     *
     * Generated from protobuf field <code>string team_id = 4;</code>
     */
    protected $team_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Im\V1\Geo $geo
     *           定位点
     *     @type string $code
     *           口令
     *     @type string $card_id
     *           身份卡ID
     *     @type string $team_id
     *           组织ID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * 定位点
     *
     * Generated from protobuf field <code>.im.v1.Geo geo = 1;</code>
     * @return \Im\V1\Geo|null
     */
    public function getGeo()
    {
        return $this->geo;
    }

    public function hasGeo()
    {
        return isset($this->geo);
    }

    public function clearGeo()
    {
        unset($this->geo);
    }

    /**
     * 定位点
     *
     * Generated from protobuf field <code>.im.v1.Geo geo = 1;</code>
     * @param \Im\V1\Geo $var
     * @return $this
     */
    public function setGeo($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Geo::class);
        $this->geo = $var;

        return $this;
    }

    /**
     * 口令
     *
     * Generated from protobuf field <code>string code = 2;</code>
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * 口令
     *
     * Generated from protobuf field <code>string code = 2;</code>
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
     * 身份卡ID
     *
     * Generated from protobuf field <code>string card_id = 3;</code>
     * @return string
     */
    public function getCardId()
    {
        return $this->card_id;
    }

    /**
     * 身份卡ID
     *
     * Generated from protobuf field <code>string card_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCardId($var)
    {
        GPBUtil::checkString($var, True);
        $this->card_id = $var;

        return $this;
    }

    /**
     * 组织ID
     *
     * Generated from protobuf field <code>string team_id = 4;</code>
     * @return string
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    /**
     * 组织ID
     *
     * Generated from protobuf field <code>string team_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTeamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->team_id = $var;

        return $this;
    }

}

