<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgPackageReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgPackageReward</code>
 */
class MsgPackageReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 1;</code>
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
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 4;</code>
     */
    private $reward_val_monster_weight_type = 0;

    public function __construct() {
        \GPBMetadata\MsgPackageReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 1;</code>
     * @return int
     */
    public function getRewardType()
    {
        return $this->reward_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgQuest.RewardType reward_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgQuest_RewardType::class);
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

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 4;</code>
     * @return int
     */
    public function getRewardValMonsterWeightType()
    {
        return $this->reward_val_monster_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType reward_val_monster_weight_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardValMonsterWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->reward_val_monster_weight_type = $var;

        return $this;
    }

}

