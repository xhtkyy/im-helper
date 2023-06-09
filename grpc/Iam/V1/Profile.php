<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/unit.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 用户个人资料
 *
 * Generated from protobuf message <code>iam.v1.Profile</code>
 */
class Profile extends \Google\Protobuf\Internal\Message
{
    /**
     * 用户的开放标识符
     *
     * Generated from protobuf field <code>string openid = 2 [(.validate.rules) = {</code>
     */
    protected $openid = '';
    /**
     * 用户的称呼，姓名，或昵称
     *
     * Generated from protobuf field <code>string title = 3 [(.validate.rules) = {</code>
     */
    protected $title = '';
    /**
     * 头像
     *
     * Generated from protobuf field <code>string avatar = 4 [(.validate.rules) = {</code>
     */
    protected $avatar = '';
    /**
     * 性别，空表示未定义，或者不使用性别
     *
     * Generated from protobuf field <code>.iam.v1.Gender gender = 5;</code>
     */
    protected $gender = 0;
    /**
     * 公开信息：电子邮箱
     *
     * Generated from protobuf field <code>string email = 6 [(.validate.rules) = {</code>
     */
    protected $email = '';
    /**
     * 公开信息：手机号
     *
     * Generated from protobuf field <code>string cellphone = 7 [(.validate.rules) = {</code>
     */
    protected $cellphone = '';
    /**
     * 公开信息：固定电话
     *
     * Generated from protobuf field <code>string telephone = 8 [(.validate.rules) = {</code>
     */
    protected $telephone = '';
    /**
     * 公开信息：生日，时间戳，单位：秒
     *
     * Generated from protobuf field <code>int64 birthday = 9;</code>
     */
    protected $birthday = 0;
    /**
     * 公开信息：所在地区，地区信息数据标识符
     *
     * Generated from protobuf field <code>int64 region = 10;</code>
     */
    protected $region = 0;
    /**
     * 公开信息：口号/座佑铭
     *
     * Generated from protobuf field <code>string slogan = 11 [(.validate.rules) = {</code>
     */
    protected $slogan = '';
    /**
     * 用户的个人自定义标识符
     *
     * Generated from protobuf field <code>string userid = 14 [(.validate.rules) = {</code>
     */
    protected $userid = '';
    /**
     * 公开信息：其它信息或设置
     *
     * Generated from protobuf field <code>.iam.v1.Ext ext = 12;</code>
     */
    protected $ext = null;
    /**
     * 自定义设置，隐藏的字段
     *
     * Generated from protobuf field <code>repeated string hidden = 13;</code>
     */
    private $hidden;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $openid
     *           用户的开放标识符
     *     @type string $title
     *           用户的称呼，姓名，或昵称
     *     @type string $avatar
     *           头像
     *     @type int $gender
     *           性别，空表示未定义，或者不使用性别
     *     @type string $email
     *           公开信息：电子邮箱
     *     @type string $cellphone
     *           公开信息：手机号
     *     @type string $telephone
     *           公开信息：固定电话
     *     @type int|string $birthday
     *           公开信息：生日，时间戳，单位：秒
     *     @type int|string $region
     *           公开信息：所在地区，地区信息数据标识符
     *     @type string $slogan
     *           公开信息：口号/座佑铭
     *     @type string $userid
     *           用户的个人自定义标识符
     *     @type \Iam\V1\Ext $ext
     *           公开信息：其它信息或设置
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $hidden
     *           自定义设置，隐藏的字段
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Unit::initOnce();
        parent::__construct($data);
    }

    /**
     * 用户的开放标识符
     *
     * Generated from protobuf field <code>string openid = 2 [(.validate.rules) = {</code>
     * @return string
     */
    public function getOpenid()
    {
        return $this->openid;
    }

    /**
     * 用户的开放标识符
     *
     * Generated from protobuf field <code>string openid = 2 [(.validate.rules) = {</code>
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
     * 用户的称呼，姓名，或昵称
     *
     * Generated from protobuf field <code>string title = 3 [(.validate.rules) = {</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 用户的称呼，姓名，或昵称
     *
     * Generated from protobuf field <code>string title = 3 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * 头像
     *
     * Generated from protobuf field <code>string avatar = 4 [(.validate.rules) = {</code>
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * 头像
     *
     * Generated from protobuf field <code>string avatar = 4 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAvatar($var)
    {
        GPBUtil::checkString($var, True);
        $this->avatar = $var;

        return $this;
    }

    /**
     * 性别，空表示未定义，或者不使用性别
     *
     * Generated from protobuf field <code>.iam.v1.Gender gender = 5;</code>
     * @return int
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * 性别，空表示未定义，或者不使用性别
     *
     * Generated from protobuf field <code>.iam.v1.Gender gender = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setGender($var)
    {
        GPBUtil::checkEnum($var, \Iam\V1\Gender::class);
        $this->gender = $var;

        return $this;
    }

    /**
     * 公开信息：电子邮箱
     *
     * Generated from protobuf field <code>string email = 6 [(.validate.rules) = {</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * 公开信息：电子邮箱
     *
     * Generated from protobuf field <code>string email = 6 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * 公开信息：手机号
     *
     * Generated from protobuf field <code>string cellphone = 7 [(.validate.rules) = {</code>
     * @return string
     */
    public function getCellphone()
    {
        return $this->cellphone;
    }

    /**
     * 公开信息：手机号
     *
     * Generated from protobuf field <code>string cellphone = 7 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setCellphone($var)
    {
        GPBUtil::checkString($var, True);
        $this->cellphone = $var;

        return $this;
    }

    /**
     * 公开信息：固定电话
     *
     * Generated from protobuf field <code>string telephone = 8 [(.validate.rules) = {</code>
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * 公开信息：固定电话
     *
     * Generated from protobuf field <code>string telephone = 8 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setTelephone($var)
    {
        GPBUtil::checkString($var, True);
        $this->telephone = $var;

        return $this;
    }

    /**
     * 公开信息：生日，时间戳，单位：秒
     *
     * Generated from protobuf field <code>int64 birthday = 9;</code>
     * @return int|string
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * 公开信息：生日，时间戳，单位：秒
     *
     * Generated from protobuf field <code>int64 birthday = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBirthday($var)
    {
        GPBUtil::checkInt64($var);
        $this->birthday = $var;

        return $this;
    }

    /**
     * 公开信息：所在地区，地区信息数据标识符
     *
     * Generated from protobuf field <code>int64 region = 10;</code>
     * @return int|string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * 公开信息：所在地区，地区信息数据标识符
     *
     * Generated from protobuf field <code>int64 region = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkInt64($var);
        $this->region = $var;

        return $this;
    }

    /**
     * 公开信息：口号/座佑铭
     *
     * Generated from protobuf field <code>string slogan = 11 [(.validate.rules) = {</code>
     * @return string
     */
    public function getSlogan()
    {
        return $this->slogan;
    }

    /**
     * 公开信息：口号/座佑铭
     *
     * Generated from protobuf field <code>string slogan = 11 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSlogan($var)
    {
        GPBUtil::checkString($var, True);
        $this->slogan = $var;

        return $this;
    }

    /**
     * 用户的个人自定义标识符
     *
     * Generated from protobuf field <code>string userid = 14 [(.validate.rules) = {</code>
     * @return string
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * 用户的个人自定义标识符
     *
     * Generated from protobuf field <code>string userid = 14 [(.validate.rules) = {</code>
     * @param string $var
     * @return $this
     */
    public function setUserid($var)
    {
        GPBUtil::checkString($var, True);
        $this->userid = $var;

        return $this;
    }

    /**
     * 公开信息：其它信息或设置
     *
     * Generated from protobuf field <code>.iam.v1.Ext ext = 12;</code>
     * @return \Iam\V1\Ext|null
     */
    public function getExt()
    {
        return $this->ext;
    }

    public function hasExt()
    {
        return isset($this->ext);
    }

    public function clearExt()
    {
        unset($this->ext);
    }

    /**
     * 公开信息：其它信息或设置
     *
     * Generated from protobuf field <code>.iam.v1.Ext ext = 12;</code>
     * @param \Iam\V1\Ext $var
     * @return $this
     */
    public function setExt($var)
    {
        GPBUtil::checkMessage($var, \Iam\V1\Ext::class);
        $this->ext = $var;

        return $this;
    }

    /**
     * 自定义设置，隐藏的字段
     *
     * Generated from protobuf field <code>repeated string hidden = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * 自定义设置，隐藏的字段
     *
     * Generated from protobuf field <code>repeated string hidden = 13;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHidden($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->hidden = $arr;

        return $this;
    }

}

