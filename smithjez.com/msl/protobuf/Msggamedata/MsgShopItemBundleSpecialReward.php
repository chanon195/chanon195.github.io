<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemBundleSpecialReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemBundleSpecialReward</code>
 */
class MsgShopItemBundleSpecialReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 reward_type = 1;</code>
     */
    private $reward_type = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_val = 2;</code>
     */
    private $reward_val = 0;
    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 3;</code>
     */
    private $reward_val_uid = 0;

    public function __construct() {
        \GPBMetadata\MsgShopItemBundleSpecialReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 reward_type = 1;</code>
     * @return int
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val = 2;</code>
     * @return int
     */
    public function getRewardVal()
    {
        return $this->reward_val;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_val = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_val = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 3;</code>
     * @return int
     */
    public function getRewardValUid()
    {
        return $this->reward_val_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 reward_val_uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardValUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_val_uid = $var;

        return $this;
    }

}

