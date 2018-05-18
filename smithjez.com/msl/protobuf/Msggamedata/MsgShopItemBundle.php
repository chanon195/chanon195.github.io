<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemBundle.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemBundle</code>
 */
class MsgShopItemBundle extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemBundleSpecialReward special_rewards = 1;</code>
     */
    private $special_rewards;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemBundle.ResetMethod reset_method = 2;</code>
     */
    private $reset_method = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 3;</code>
     */
    private $prob_list;

    public function __construct() {
        \GPBMetadata\MsgShopItemBundle::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemBundleSpecialReward special_rewards = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecialRewards()
    {
        return $this->special_rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemBundleSpecialReward special_rewards = 1;</code>
     * @param \Msggamedata\MsgShopItemBundleSpecialReward[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecialRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgShopItemBundleSpecialReward::class);
        $this->special_rewards = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemBundle.ResetMethod reset_method = 2;</code>
     * @return int
     */
    public function getResetMethod()
    {
        return $this->reset_method;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopItemBundle.ResetMethod reset_method = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResetMethod($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgShopItemBundle_ResetMethod::class);
        $this->reset_method = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getProbList()
    {
        return $this->prob_list;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaMonster.StatWeightTypeAndProb prob_list = 3;</code>
     * @param \Msggamedata\MsgShopItemMetaMonster_StatWeightTypeAndProb[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setProbList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgShopItemMetaMonster_StatWeightTypeAndProb::class);
        $this->prob_list = $arr;

        return $this;
    }

}
