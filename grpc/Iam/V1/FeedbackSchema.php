<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: iam/v1/hub.proto

namespace Iam\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>iam.v1.FeedbackSchema</code>
 */
class FeedbackSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     */
    protected $id = 0;
    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     */
    protected $user_id = '';
    /**
     * Generated from protobuf field <code>string content = 4;</code>
     */
    protected $content = '';
    /**
     * Generated from protobuf field <code>int64 create_at = 5;</code>
     */
    protected $create_at = 0;
    /**
     * Generated from protobuf field <code>int64 update_at = 6;</code>
     */
    protected $update_at = 0;
    /**
     * Generated from protobuf field <code>int64 delete_at = 7;</code>
     */
    protected $delete_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $id
     *           &#64;gotags: gorm:"primaryKey" json:"-"
     *     @type string $user_id
     *     @type string $content
     *     @type int|string $create_at
     *     @type int|string $update_at
     *     @type int|string $delete_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Iam\V1\Hub::initOnce();
        parent::__construct($data);
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * &#64;gotags: gorm:"primaryKey" json:"-"
     *
     * Generated from protobuf field <code>int64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>string user_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string content = 4;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Generated from protobuf field <code>string content = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->content = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 create_at = 5;</code>
     * @return int|string
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * Generated from protobuf field <code>int64 create_at = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->create_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 update_at = 6;</code>
     * @return int|string
     */
    public function getUpdateAt()
    {
        return $this->update_at;
    }

    /**
     * Generated from protobuf field <code>int64 update_at = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->update_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 delete_at = 7;</code>
     * @return int|string
     */
    public function getDeleteAt()
    {
        return $this->delete_at;
    }

    /**
     * Generated from protobuf field <code>int64 delete_at = 7;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeleteAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->delete_at = $var;

        return $this;
    }

}

