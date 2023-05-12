<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: im/v1/schema.proto

namespace Im\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 应用交互
 *
 * Generated from protobuf message <code>im.v1.App</code>
 */
class App extends \Google\Protobuf\Internal\Message
{
    /**
     * 涉及的应用，标识符
     *
     * Generated from protobuf field <code>string app = 1;</code>
     */
    protected $app = '';
    /**
     * 短标题
     *
     * Generated from protobuf field <code>string title = 2;</code>
     */
    protected $title = '';
    /**
     * 涉及的组织，标识符
     *
     * Generated from protobuf field <code>string team = 3;</code>
     */
    protected $team = '';
    /**
     * 缩略图，资源标识符
     *
     * Generated from protobuf field <code>string thumbs = 4;</code>
     */
    protected $thumbs = '';
    /**
     * 小图标，资源标识符
     *
     * Generated from protobuf field <code>string icon = 5;</code>
     */
    protected $icon = '';
    /**
     * 摘要信息
     *
     * Generated from protobuf field <code>string summary = 6;</code>
     */
    protected $summary = '';
    /**
     * 语言代码，如果使用
     *
     * Generated from protobuf field <code>string lang = 7;</code>
     */
    protected $lang = '';
    /**
     * 发起来源，标识符或文本
     *
     * Generated from protobuf field <code>string source = 8;</code>
     */
    protected $source = '';
    /**
     * 发起来源的图标，资源标识符
     *
     * Generated from protobuf field <code>string source_icon = 9;</code>
     */
    protected $source_icon = '';
    /**
     * 指定默认使用的呈现模板号，可被应用重定义
     *
     * Generated from protobuf field <code>string template = 10;</code>
     */
    protected $template = '';
    /**
     * 携带的扩展数据
     *
     * Generated from protobuf field <code>bytes data = 11;</code>
     */
    protected $data = '';
    /**
     * 默认结果（或状态）
     *
     * Generated from protobuf field <code>int64 state = 12;</code>
     */
    protected $state = 0;
    /**
     * 涉及的操作，点击后 action 定义会作为参数带回 app 执行
     *
     * Generated from protobuf field <code>repeated .im.v1.App.Action actions = 13;</code>
     */
    private $actions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app
     *           涉及的应用，标识符
     *     @type string $title
     *           短标题
     *     @type string $team
     *           涉及的组织，标识符
     *     @type string $thumbs
     *           缩略图，资源标识符
     *     @type string $icon
     *           小图标，资源标识符
     *     @type string $summary
     *           摘要信息
     *     @type string $lang
     *           语言代码，如果使用
     *     @type string $source
     *           发起来源，标识符或文本
     *     @type string $source_icon
     *           发起来源的图标，资源标识符
     *     @type string $template
     *           指定默认使用的呈现模板号，可被应用重定义
     *     @type string $data
     *           携带的扩展数据
     *     @type int|string $state
     *           默认结果（或状态）
     *     @type \Im\V1\App\Action[]|\Google\Protobuf\Internal\RepeatedField $actions
     *           涉及的操作，点击后 action 定义会作为参数带回 app 执行
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Im\V1\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * 涉及的应用，标识符
     *
     * Generated from protobuf field <code>string app = 1;</code>
     * @return string
     */
    public function getApp()
    {
        return $this->app;
    }

    /**
     * 涉及的应用，标识符
     *
     * Generated from protobuf field <code>string app = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setApp($var)
    {
        GPBUtil::checkString($var, True);
        $this->app = $var;

        return $this;
    }

    /**
     * 短标题
     *
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * 短标题
     *
     * Generated from protobuf field <code>string title = 2;</code>
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
     * 涉及的组织，标识符
     *
     * Generated from protobuf field <code>string team = 3;</code>
     * @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * 涉及的组织，标识符
     *
     * Generated from protobuf field <code>string team = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTeam($var)
    {
        GPBUtil::checkString($var, True);
        $this->team = $var;

        return $this;
    }

    /**
     * 缩略图，资源标识符
     *
     * Generated from protobuf field <code>string thumbs = 4;</code>
     * @return string
     */
    public function getThumbs()
    {
        return $this->thumbs;
    }

    /**
     * 缩略图，资源标识符
     *
     * Generated from protobuf field <code>string thumbs = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setThumbs($var)
    {
        GPBUtil::checkString($var, True);
        $this->thumbs = $var;

        return $this;
    }

    /**
     * 小图标，资源标识符
     *
     * Generated from protobuf field <code>string icon = 5;</code>
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * 小图标，资源标识符
     *
     * Generated from protobuf field <code>string icon = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->icon = $var;

        return $this;
    }

    /**
     * 摘要信息
     *
     * Generated from protobuf field <code>string summary = 6;</code>
     * @return string
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * 摘要信息
     *
     * Generated from protobuf field <code>string summary = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setSummary($var)
    {
        GPBUtil::checkString($var, True);
        $this->summary = $var;

        return $this;
    }

    /**
     * 语言代码，如果使用
     *
     * Generated from protobuf field <code>string lang = 7;</code>
     * @return string
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * 语言代码，如果使用
     *
     * Generated from protobuf field <code>string lang = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setLang($var)
    {
        GPBUtil::checkString($var, True);
        $this->lang = $var;

        return $this;
    }

    /**
     * 发起来源，标识符或文本
     *
     * Generated from protobuf field <code>string source = 8;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * 发起来源，标识符或文本
     *
     * Generated from protobuf field <code>string source = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * 发起来源的图标，资源标识符
     *
     * Generated from protobuf field <code>string source_icon = 9;</code>
     * @return string
     */
    public function getSourceIcon()
    {
        return $this->source_icon;
    }

    /**
     * 发起来源的图标，资源标识符
     *
     * Generated from protobuf field <code>string source_icon = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceIcon($var)
    {
        GPBUtil::checkString($var, True);
        $this->source_icon = $var;

        return $this;
    }

    /**
     * 指定默认使用的呈现模板号，可被应用重定义
     *
     * Generated from protobuf field <code>string template = 10;</code>
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * 指定默认使用的呈现模板号，可被应用重定义
     *
     * Generated from protobuf field <code>string template = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplate($var)
    {
        GPBUtil::checkString($var, True);
        $this->template = $var;

        return $this;
    }

    /**
     * 携带的扩展数据
     *
     * Generated from protobuf field <code>bytes data = 11;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 携带的扩展数据
     *
     * Generated from protobuf field <code>bytes data = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * 默认结果（或状态）
     *
     * Generated from protobuf field <code>int64 state = 12;</code>
     * @return int|string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * 默认结果（或状态）
     *
     * Generated from protobuf field <code>int64 state = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkInt64($var);
        $this->state = $var;

        return $this;
    }

    /**
     * 涉及的操作，点击后 action 定义会作为参数带回 app 执行
     *
     * Generated from protobuf field <code>repeated .im.v1.App.Action actions = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * 涉及的操作，点击后 action 定义会作为参数带回 app 执行
     *
     * Generated from protobuf field <code>repeated .im.v1.App.Action actions = 13;</code>
     * @param \Im\V1\App\Action[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setActions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Im\V1\App\Action::class);
        $this->actions = $arr;

        return $this;
    }

}

