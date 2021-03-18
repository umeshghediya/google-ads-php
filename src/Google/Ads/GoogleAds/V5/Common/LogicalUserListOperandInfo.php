<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/common/user_lists.proto

namespace Google\Ads\GoogleAds\V5\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Operand of logical user list that consists of a user list.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.common.LogicalUserListOperandInfo</code>
 */
class LogicalUserListOperandInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Resource name of a user list as an operand.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     */
    protected $user_list = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\StringValue $user_list
     *           Resource name of a user list as an operand.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * Resource name of a user list as an operand.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @return \Google\Protobuf\StringValue
     */
    public function getUserList()
    {
        return isset($this->user_list) ? $this->user_list : null;
    }

    public function hasUserList()
    {
        return isset($this->user_list);
    }

    public function clearUserList()
    {
        unset($this->user_list);
    }

    /**
     * Returns the unboxed value from <code>getUserList()</code>

     * Resource name of a user list as an operand.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @return string|null
     */
    public function getUserListUnwrapped()
    {
        return $this->readWrapperValue("user_list");
    }

    /**
     * Resource name of a user list as an operand.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setUserList($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->user_list = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * Resource name of a user list as an operand.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue user_list = 1;</code>
     * @param string|null $var
     * @return $this
     */
    public function setUserListUnwrapped($var)
    {
        $this->writeWrapperValue("user_list", $var);
        return $this;}

}

