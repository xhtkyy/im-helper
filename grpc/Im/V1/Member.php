<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 群成员
 *
 * Generated from protobuf message <code>im.v1.Member</code>
 */
class Member extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     */
    protected $lid = 0;
    /**
     * &#64;gotags: json:"group"
     *
     * Generated from protobuf field <code>string group = 2;</code>
     */
    protected $group = '';
    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 4;</code>
     */
    protected $openid = '';
    /**
     * &#64;gotags: gorm:"serializer:json" json:"roles"
     *
     * Generated from protobuf field <code>repeated string roles = 5;</code>
     */
    private $roles;
    /**
     * &#64;gotags: gorm:"serializer:json" json:"badges"
     *
     * Generated from protobuf field <code>repeated string badges = 6;</code>
     */
    private $badges;
    /**
     * &#64;gotags: json:"banned"
     *
     * Generated from protobuf field <code>int64 banned = 7;</code>
     */
    protected $banned = 0;
    /**
     * &#64;gotags: json:"disabled"
     *
     * Generated from protobuf field <code>int64 disabled = 8;</code>
     */
    protected $disabled = 0;
    /**
     * &#64;gotags: json:"joined"
     *
     * Generated from protobuf field <code>int64 joined = 9;</code>
     */
    protected $joined = 0;
    /**
     * &#64;gotags: json:"removed"
     *
     * Generated from protobuf field <code>int64 removed = 10;</code>
     */
    protected $removed = 0;
    /**
     * &#64;gotags: json:"latest"
     *
     * Generated from protobuf field <code>int64 latest = 11;</code>
     */
    protected $latest = 0;
    /**
     * &#64;gotags: gorm:"serializer:json" json:"attachments"
     *
     * Generated from protobuf field <code>.im.v1.ClientAttr attachments = 12;</code>
     */
    protected $attachments = null;
    /**
     * &#64;gotags: json:"addr"
     *
     * Generated from protobuf field <code>bool addr = 13;</code>
     */
    protected $addr = false;
    /**
     * &#64;gotags: json:"history"
     *
     * Generated from protobuf field <code>bool history = 14;</code>
     */
    protected $history = false;
    /**
     * &#64;gotags: json:"self_delete"
     *
     * Generated from protobuf field <code>bool self_delete = 15;</code>
     */
    protected $self_delete = false;
    /**
     * &#64;gotags: json:"lunar"
     *
     * Generated from protobuf field <code>bool lunar = 16;</code>
     */
    protected $lunar = false;
    /**
     * &#64;gotags: json:"born_at"
     *
     * Generated from protobuf field <code>int64 born_at = 17;</code>
     */
    protected $born_at = 0;
    /**
     * &#64;gotags: json:"birthday"
     *
     * Generated from protobuf field <code>string birthday = 18;</code>
     */
    protected $birthday = '';
    /**
     * &#64;gotags: json:"weather"
     *
     * Generated from protobuf field <code>bool weather = 19;</code>
     */
    protected $weather = false;
    /**
     * &#64;gotags: json:"lat"
     *
     * Generated from protobuf field <code>string lat = 20;</code>
     */
    protected $lat = '';
    /**
     * &#64;gotags: json:"lon"
     *
     * Generated from protobuf field <code>string lon = 21;</code>
     */
    protected $lon = '';
    /**
     * &#64;gotags: json:"address"
     *
     * Generated from protobuf field <code>string address = 22;</code>
     */
    protected $address = '';
    /**
     * &#64;gotags: json:"notice_at"
     *
     * Generated from protobuf field <code>int64 notice_at = 23;</code>
     */
    protected $notice_at = 0;
    /**
     * &#64;gotags: json:"notice"
     *
     * Generated from protobuf field <code>bool notice = 24;</code>
     */
    protected $notice = false;
    /**
     * &#64;gotags: json:"pending"
     *
     * Generated from protobuf field <code>bool pending = 25;</code>
     */
    protected $pending = false;
    /**
     * &#64;gotags: json:"note"
     *
     * Generated from protobuf field <code>bool note = 26;</code>
     */
    protected $note = false;
    /**
     * &#64;gotags: json:"matter"
     *
     * Generated from protobuf field <code>bool matter = 27;</code>
     */
    protected $matter = false;
    /**
     * &#64;gotags: json:"photo"
     *
     * Generated from protobuf field <code>bool photo = 28;</code>
     */
    protected $photo = false;
    /**
     * &#64;gotags: json:"birth"
     *
     * Generated from protobuf field <code>bool birth = 29;</code>
     */
    protected $birth = false;
    /**
     * &#64;gotags: gorm:"-" json:"card"
     *
     * Generated from protobuf field <code>.im.v1.Card card = 30;</code>
     */
    protected $card = null;
    /**
     * &#64;gotags: json:"pin"
     *
     * Generated from protobuf field <code>bool pin = 31;</code>
     */
    protected $pin = false;
    /**
     * &#64;gotags: json:"view_history"
     *
     * Generated from protobuf field <code>bool view_history = 32;</code>
     */
    protected $view_history = false;
    /**
     * &#64;gotags: json:"no_disturb"
     *
     * Generated from protobuf field <code>bool no_disturb = 33;</code>
     */
    protected $no_disturb = false;
    /**
     * &#64;gotags: json:"nickname"
     *
     * Generated from protobuf field <code>string nickname = 34;</code>
     */
    protected $nickname = '';
    /**
     * &#64;gotags: json:"comment"
     *
     * Generated from protobuf field <code>string comment = 35;</code>
     */
    protected $comment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $lid
     *           &#64;gotags: gorm:"primaryKey" json:"-"
     *     @type string $group
     *           &#64;gotags: json:"group"
     *     @type string $openid
     *           &#64;gotags: json:"openid"
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $roles
     *           &#64;gotags: gorm:"serializer:json" json:"roles"
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $badges
     *           &#64;gotags: gorm:"serializer:json" json:"badges"
     *     @type int|string $banned
     *           &#64;gotags: json:"banned"
     *     @type int|string $disabled
     *           &#64;gotags: json:"disabled"
     *     @type int|string $joined
     *           &#64;gotags: json:"joined"
     *     @type int|string $removed
     *           &#64;gotags: json:"removed"
     *     @type int|string $latest
     *           &#64;gotags: json:"latest"
     *     @type \Im\V1\ClientAttr $attachments
     *           &#64;gotags: gorm:"serializer:json" json:"attachments"
     *     @type bool $addr
     *           &#64;gotags: json:"addr"
     *     @type bool $history
     *           &#64;gotags: json:"history"
     *     @type bool $self_delete
     *           &#64;gotags: json:"self_delete"
     *     @type bool $lunar
     *           &#64;gotags: json:"lunar"
     *     @type int|string $born_at
     *           &#64;gotags: json:"born_at"
     *     @type string $birthday
     *           &#64;gotags: json:"birthday"
     *     @type bool $weather
     *           &#64;gotags: json:"weather"
     *     @type string $lat
     *           &#64;gotags: json:"lat"
     *     @type string $lon
     *           &#64;gotags: json:"lon"
     *     @type string $address
     *           &#64;gotags: json:"address"
     *     @type int|string $notice_at
     *           &#64;gotags: json:"notice_at"
     *     @type bool $notice
     *           &#64;gotags: json:"notice"
     *     @type bool $pending
     *           &#64;gotags: json:"pending"
     *     @type bool $note
     *           &#64;gotags: json:"note"
     *     @type bool $matter
     *           &#64;gotags: json:"matter"
     *     @type bool $photo
     *           &#64;gotags: json:"photo"
     *     @type bool $birth
     *           &#64;gotags: json:"birth"
     *     @type \Im\V1\Card $card
     *           &#64;gotags: gorm:"-" json:"card"
     *     @type bool $pin
     *           &#64;gotags: json:"pin"
     *     @type bool $view_history
     *           &#64;gotags: json:"view_history"
     *     @type bool $no_disturb
     *           &#64;gotags: json:"no_disturb"
     *     @type string $nickname
     *           &#64;gotags: json:"nickname"
     *     @type string $comment
     *           &#64;gotags: json:"comment"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @return int|string
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 lid = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLid($var)
    {
        GPBUtil::checkInt64($var);
        $this->lid = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"group"
     *
     * Generated from protobuf field <code>string group = 2;</code>
     * @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * &#64;gotags: json:"group"
     *
     * Generated from protobuf field <code>string group = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->group = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 4;</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * &#64;gotags: json:"openid"
     *
     * Generated from protobuf field <code>string openid = 4;</code>
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
     * &#64;gotags: gorm:"serializer:json" json:"roles"
     *
     * Generated from protobuf field <code>repeated string roles = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"roles"
     *
     * Generated from protobuf field <code>repeated string roles = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->roles = $arr;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"badges"
     *
     * Generated from protobuf field <code>repeated string badges = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBadges()
    {
        return $this->badges;
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"badges"
     *
     * Generated from protobuf field <code>repeated string badges = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBadges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->badges = $arr;

        return $this;
    }

    /**
     * &#64;gotags: json:"banned"
     *
     * Generated from protobuf field <code>int64 banned = 7;</code>
     * @return int|string
     */
    public function getBanned()
    {
        return $this->banned;
    }

    /**
     * &#64;gotags: json:"banned"
     *
     * Generated from protobuf field <code>int64 banned = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBanned($var)
    {
        GPBUtil::checkInt64($var);
        $this->banned = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"disabled"
     *
     * Generated from protobuf field <code>int64 disabled = 8;</code>
     * @return int|string
     */
    public function getDisabled()
    {
        return $this->disabled;
    }

    /**
     * &#64;gotags: json:"disabled"
     *
     * Generated from protobuf field <code>int64 disabled = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDisabled($var)
    {
        GPBUtil::checkInt64($var);
        $this->disabled = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"joined"
     *
     * Generated from protobuf field <code>int64 joined = 9;</code>
     * @return int|string
     */
    public function getJoined()
    {
        return $this->joined;
    }

    /**
     * &#64;gotags: json:"joined"
     *
     * Generated from protobuf field <code>int64 joined = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setJoined($var)
    {
        GPBUtil::checkInt64($var);
        $this->joined = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"removed"
     *
     * Generated from protobuf field <code>int64 removed = 10;</code>
     * @return int|string
     */
    public function getRemoved()
    {
        return $this->removed;
    }

    /**
     * &#64;gotags: json:"removed"
     *
     * Generated from protobuf field <code>int64 removed = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemoved($var)
    {
        GPBUtil::checkInt64($var);
        $this->removed = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"latest"
     *
     * Generated from protobuf field <code>int64 latest = 11;</code>
     * @return int|string
     */
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * &#64;gotags: json:"latest"
     *
     * Generated from protobuf field <code>int64 latest = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLatest($var)
    {
        GPBUtil::checkInt64($var);
        $this->latest = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"attachments"
     *
     * Generated from protobuf field <code>.im.v1.ClientAttr attachments = 12;</code>
     * @return \Im\V1\ClientAttr|null
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    public function hasAttachments()
    {
        return isset($this->attachments);
    }

    public function clearAttachments()
    {
        unset($this->attachments);
    }

    /**
     * &#64;gotags: gorm:"serializer:json" json:"attachments"
     *
     * Generated from protobuf field <code>.im.v1.ClientAttr attachments = 12;</code>
     * @param \Im\V1\ClientAttr $var
     * @return $this
     */
    public function setAttachments($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\ClientAttr::class);
        $this->attachments = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"addr"
     *
     * Generated from protobuf field <code>bool addr = 13;</code>
     * @return bool
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * &#64;gotags: json:"addr"
     *
     * Generated from protobuf field <code>bool addr = 13;</code>
     * @param bool $var
     * @return $this
     */
    public function setAddr($var)
    {
        GPBUtil::checkBool($var);
        $this->addr = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"history"
     *
     * Generated from protobuf field <code>bool history = 14;</code>
     * @return bool
     */
    public function getHistory()
    {
        return $this->history;
    }

    /**
     * &#64;gotags: json:"history"
     *
     * Generated from protobuf field <code>bool history = 14;</code>
     * @param bool $var
     * @return $this
     */
    public function setHistory($var)
    {
        GPBUtil::checkBool($var);
        $this->history = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"self_delete"
     *
     * Generated from protobuf field <code>bool self_delete = 15;</code>
     * @return bool
     */
    public function getSelfDelete()
    {
        return $this->self_delete;
    }

    /**
     * &#64;gotags: json:"self_delete"
     *
     * Generated from protobuf field <code>bool self_delete = 15;</code>
     * @param bool $var
     * @return $this
     */
    public function setSelfDelete($var)
    {
        GPBUtil::checkBool($var);
        $this->self_delete = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"lunar"
     *
     * Generated from protobuf field <code>bool lunar = 16;</code>
     * @return bool
     */
    public function getLunar()
    {
        return $this->lunar;
    }

    /**
     * &#64;gotags: json:"lunar"
     *
     * Generated from protobuf field <code>bool lunar = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setLunar($var)
    {
        GPBUtil::checkBool($var);
        $this->lunar = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"born_at"
     *
     * Generated from protobuf field <code>int64 born_at = 17;</code>
     * @return int|string
     */
    public function getBornAt()
    {
        return $this->born_at;
    }

    /**
     * &#64;gotags: json:"born_at"
     *
     * Generated from protobuf field <code>int64 born_at = 17;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBornAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->born_at = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"birthday"
     *
     * Generated from protobuf field <code>string birthday = 18;</code>
     * @return string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * &#64;gotags: json:"birthday"
     *
     * Generated from protobuf field <code>string birthday = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setBirthday($var)
    {
        GPBUtil::checkString($var, True);
        $this->birthday = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"weather"
     *
     * Generated from protobuf field <code>bool weather = 19;</code>
     * @return bool
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * &#64;gotags: json:"weather"
     *
     * Generated from protobuf field <code>bool weather = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setWeather($var)
    {
        GPBUtil::checkBool($var);
        $this->weather = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"lat"
     *
     * Generated from protobuf field <code>string lat = 20;</code>
     * @return string
     */
    public function getLat()
    {
        return $this->lat;
    }

    /**
     * &#64;gotags: json:"lat"
     *
     * Generated from protobuf field <code>string lat = 20;</code>
     * @param string $var
     * @return $this
     */
    public function setLat($var)
    {
        GPBUtil::checkString($var, True);
        $this->lat = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"lon"
     *
     * Generated from protobuf field <code>string lon = 21;</code>
     * @return string
     */
    public function getLon()
    {
        return $this->lon;
    }

    /**
     * &#64;gotags: json:"lon"
     *
     * Generated from protobuf field <code>string lon = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setLon($var)
    {
        GPBUtil::checkString($var, True);
        $this->lon = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"address"
     *
     * Generated from protobuf field <code>string address = 22;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * &#64;gotags: json:"address"
     *
     * Generated from protobuf field <code>string address = 22;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"notice_at"
     *
     * Generated from protobuf field <code>int64 notice_at = 23;</code>
     * @return int|string
     */
    public function getNoticeAt()
    {
        return $this->notice_at;
    }

    /**
     * &#64;gotags: json:"notice_at"
     *
     * Generated from protobuf field <code>int64 notice_at = 23;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNoticeAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->notice_at = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"notice"
     *
     * Generated from protobuf field <code>bool notice = 24;</code>
     * @return bool
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * &#64;gotags: json:"notice"
     *
     * Generated from protobuf field <code>bool notice = 24;</code>
     * @param bool $var
     * @return $this
     */
    public function setNotice($var)
    {
        GPBUtil::checkBool($var);
        $this->notice = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"pending"
     *
     * Generated from protobuf field <code>bool pending = 25;</code>
     * @return bool
     */
    public function getPending()
    {
        return $this->pending;
    }

    /**
     * &#64;gotags: json:"pending"
     *
     * Generated from protobuf field <code>bool pending = 25;</code>
     * @param bool $var
     * @return $this
     */
    public function setPending($var)
    {
        GPBUtil::checkBool($var);
        $this->pending = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"note"
     *
     * Generated from protobuf field <code>bool note = 26;</code>
     * @return bool
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * &#64;gotags: json:"note"
     *
     * Generated from protobuf field <code>bool note = 26;</code>
     * @param bool $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkBool($var);
        $this->note = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"matter"
     *
     * Generated from protobuf field <code>bool matter = 27;</code>
     * @return bool
     */
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * &#64;gotags: json:"matter"
     *
     * Generated from protobuf field <code>bool matter = 27;</code>
     * @param bool $var
     * @return $this
     */
    public function setMatter($var)
    {
        GPBUtil::checkBool($var);
        $this->matter = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"photo"
     *
     * Generated from protobuf field <code>bool photo = 28;</code>
     * @return bool
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * &#64;gotags: json:"photo"
     *
     * Generated from protobuf field <code>bool photo = 28;</code>
     * @param bool $var
     * @return $this
     */
    public function setPhoto($var)
    {
        GPBUtil::checkBool($var);
        $this->photo = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"birth"
     *
     * Generated from protobuf field <code>bool birth = 29;</code>
     * @return bool
     */
    public function getBirth()
    {
        return $this->birth;
    }

    /**
     * &#64;gotags: json:"birth"
     *
     * Generated from protobuf field <code>bool birth = 29;</code>
     * @param bool $var
     * @return $this
     */
    public function setBirth($var)
    {
        GPBUtil::checkBool($var);
        $this->birth = $var;

        return $this;
    }

    /**
     * &#64;gotags: gorm:"-" json:"card"
     *
     * Generated from protobuf field <code>.im.v1.Card card = 30;</code>
     * @return \Im\V1\Card|null
     */
    public function getCard()
    {
        return $this->card;
    }

    public function hasCard()
    {
        return isset($this->card);
    }

    public function clearCard()
    {
        unset($this->card);
    }

    /**
     * &#64;gotags: gorm:"-" json:"card"
     *
     * Generated from protobuf field <code>.im.v1.Card card = 30;</code>
     * @param \Im\V1\Card $var
     * @return $this
     */
    public function setCard($var)
    {
        GPBUtil::checkMessage($var, \Im\V1\Card::class);
        $this->card = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"pin"
     *
     * Generated from protobuf field <code>bool pin = 31;</code>
     * @return bool
     */
    public function getPin()
    {
        return $this->pin;
    }

    /**
     * &#64;gotags: json:"pin"
     *
     * Generated from protobuf field <code>bool pin = 31;</code>
     * @param bool $var
     * @return $this
     */
    public function setPin($var)
    {
        GPBUtil::checkBool($var);
        $this->pin = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"view_history"
     *
     * Generated from protobuf field <code>bool view_history = 32;</code>
     * @return bool
     */
    public function getViewHistory()
    {
        return $this->view_history;
    }

    /**
     * &#64;gotags: json:"view_history"
     *
     * Generated from protobuf field <code>bool view_history = 32;</code>
     * @param bool $var
     * @return $this
     */
    public function setViewHistory($var)
    {
        GPBUtil::checkBool($var);
        $this->view_history = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"no_disturb"
     *
     * Generated from protobuf field <code>bool no_disturb = 33;</code>
     * @return bool
     */
    public function getNoDisturb()
    {
        return $this->no_disturb;
    }

    /**
     * &#64;gotags: json:"no_disturb"
     *
     * Generated from protobuf field <code>bool no_disturb = 33;</code>
     * @param bool $var
     * @return $this
     */
    public function setNoDisturb($var)
    {
        GPBUtil::checkBool($var);
        $this->no_disturb = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"nickname"
     *
     * Generated from protobuf field <code>string nickname = 34;</code>
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * &#64;gotags: json:"nickname"
     *
     * Generated from protobuf field <code>string nickname = 34;</code>
     * @param string $var
     * @return $this
     */
    public function setNickname($var)
    {
        GPBUtil::checkString($var, True);
        $this->nickname = $var;

        return $this;
    }

    /**
     * &#64;gotags: json:"comment"
     *
     * Generated from protobuf field <code>string comment = 35;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * &#64;gotags: json:"comment"
     *
     * Generated from protobuf field <code>string comment = 35;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

}

