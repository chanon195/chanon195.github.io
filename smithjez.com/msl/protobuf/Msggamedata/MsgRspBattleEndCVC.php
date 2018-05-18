<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRspBattleEndCVC.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgRspBattleEndCVC</code>
 */
class MsgRspBattleEndCVC extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 1;</code>
     */
    private $result = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     */
    private $round_results;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory my_clan_cvc_phase_history = 4;</code>
     */
    private $my_clan_cvc_phase_history = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember my_cvc_member = 5;</code>
     */
    private $my_cvc_member = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory enemy_clan_cvc_phase_history = 6;</code>
     */
    private $enemy_clan_cvc_phase_history = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_cvc_member = 7;</code>
     */
    private $enemy_cvc_member = null;
    /**
     * Generated from protobuf field <code>bool phase_is_end = 8;</code>
     */
    private $phase_is_end = false;
    /**
     * Generated from protobuf field <code>bool is_timeout = 9;</code>
     */
    private $is_timeout = false;
    /**
     * Generated from protobuf field <code>uint32 gain_score = 10;</code>
     */
    private $gain_score = 0;
    /**
     * Generated from protobuf field <code>uint32 reward_grade = 11;</code>
     */
    private $reward_grade = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards = 12;</code>
     */
    private $rewards;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards_delta = 13;</code>
     */
    private $rewards_delta;

    public function __construct() {
        \GPBMetadata\MsgRspBattleEndCVC::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 1;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.BattleEndResultType result = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\BattleEndResultType::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoundResults()
    {
        return $this->round_results;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.BattleEndResultType round_results = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoundResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Msggamedata\BattleEndResultType::class);
        $this->round_results = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 3;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory my_clan_cvc_phase_history = 4;</code>
     * @return \Msggamedata\MsgCVCPhaseHistory
     */
    public function getMyClanCvcPhaseHistory()
    {
        return $this->my_clan_cvc_phase_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory my_clan_cvc_phase_history = 4;</code>
     * @param \Msggamedata\MsgCVCPhaseHistory $var
     * @return $this
     */
    public function setMyClanCvcPhaseHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgCVCPhaseHistory::class);
        $this->my_clan_cvc_phase_history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember my_cvc_member = 5;</code>
     * @return \Msggamedata\MsgUserCVCMember
     */
    public function getMyCvcMember()
    {
        return $this->my_cvc_member;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember my_cvc_member = 5;</code>
     * @param \Msggamedata\MsgUserCVCMember $var
     * @return $this
     */
    public function setMyCvcMember($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserCVCMember::class);
        $this->my_cvc_member = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory enemy_clan_cvc_phase_history = 6;</code>
     * @return \Msggamedata\MsgCVCPhaseHistory
     */
    public function getEnemyClanCvcPhaseHistory()
    {
        return $this->enemy_clan_cvc_phase_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCPhaseHistory enemy_clan_cvc_phase_history = 6;</code>
     * @param \Msggamedata\MsgCVCPhaseHistory $var
     * @return $this
     */
    public function setEnemyClanCvcPhaseHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgCVCPhaseHistory::class);
        $this->enemy_clan_cvc_phase_history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_cvc_member = 7;</code>
     * @return \Msggamedata\MsgUserCVCMember
     */
    public function getEnemyCvcMember()
    {
        return $this->enemy_cvc_member;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_cvc_member = 7;</code>
     * @param \Msggamedata\MsgUserCVCMember $var
     * @return $this
     */
    public function setEnemyCvcMember($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserCVCMember::class);
        $this->enemy_cvc_member = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool phase_is_end = 8;</code>
     * @return bool
     */
    public function getPhaseIsEnd()
    {
        return $this->phase_is_end;
    }

    /**
     * Generated from protobuf field <code>bool phase_is_end = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setPhaseIsEnd($var)
    {
        GPBUtil::checkBool($var);
        $this->phase_is_end = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_timeout = 9;</code>
     * @return bool
     */
    public function getIsTimeout()
    {
        return $this->is_timeout;
    }

    /**
     * Generated from protobuf field <code>bool is_timeout = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsTimeout($var)
    {
        GPBUtil::checkBool($var);
        $this->is_timeout = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 gain_score = 10;</code>
     * @return int
     */
    public function getGainScore()
    {
        return $this->gain_score;
    }

    /**
     * Generated from protobuf field <code>uint32 gain_score = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setGainScore($var)
    {
        GPBUtil::checkUint32($var);
        $this->gain_score = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_grade = 11;</code>
     * @return int
     */
    public function getRewardGrade()
    {
        return $this->reward_grade;
    }

    /**
     * Generated from protobuf field <code>uint32 reward_grade = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardGrade($var)
    {
        GPBUtil::checkUint32($var);
        $this->reward_grade = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards = 12;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards = 12;</code>
     * @param \Msggamedata\MsgBattleRewardInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgBattleRewardInfo::class);
        $this->rewards = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards_delta = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewardsDelta()
    {
        return $this->rewards_delta;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgBattleRewardInfo rewards_delta = 13;</code>
     * @param \Msggamedata\MsgBattleRewardInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewardsDelta($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgBattleRewardInfo::class);
        $this->rewards_delta = $arr;

        return $this;
    }

}
