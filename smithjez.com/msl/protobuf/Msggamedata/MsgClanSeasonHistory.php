<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgClanSeasonHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgClanSeasonHistory</code>
 */
class MsgClanSeasonHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 1;</code>
     */
    private $clan_battle_season_idx = 0;
    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 2;</code>
     */
    private $stage_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 max_phase_count = 3;</code>
     */
    private $max_phase_count = 0;
    /**
     * Generated from protobuf field <code>uint32 join_phase_count = 4;</code>
     */
    private $join_phase_count = 0;
    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 5;</code>
     */
    private $cur_boss_level = 0;
    /**
     * Generated from protobuf field <code>uint64 cur_boss_hp = 6;</code>
     */
    private $cur_boss_hp = 0;

    public function __construct() {
        \GPBMetadata\MsgClanSeasonHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 1;</code>
     * @return int
     */
    public function getClanBattleSeasonIdx()
    {
        return $this->clan_battle_season_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 clan_battle_season_idx = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setClanBattleSeasonIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->clan_battle_season_idx = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 2;</code>
     * @return int
     */
    public function getStageUid()
    {
        return $this->stage_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 stage_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStageUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->stage_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_phase_count = 3;</code>
     * @return int
     */
    public function getMaxPhaseCount()
    {
        return $this->max_phase_count;
    }

    /**
     * Generated from protobuf field <code>uint32 max_phase_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxPhaseCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_phase_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 join_phase_count = 4;</code>
     * @return int
     */
    public function getJoinPhaseCount()
    {
        return $this->join_phase_count;
    }

    /**
     * Generated from protobuf field <code>uint32 join_phase_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setJoinPhaseCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->join_phase_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 5;</code>
     * @return int
     */
    public function getCurBossLevel()
    {
        return $this->cur_boss_level;
    }

    /**
     * Generated from protobuf field <code>uint32 cur_boss_level = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCurBossLevel($var)
    {
        GPBUtil::checkUint32($var);
        $this->cur_boss_level = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 cur_boss_hp = 6;</code>
     * @return int|string
     */
    public function getCurBossHp()
    {
        return $this->cur_boss_hp;
    }

    /**
     * Generated from protobuf field <code>uint64 cur_boss_hp = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCurBossHp($var)
    {
        GPBUtil::checkUint64($var);
        $this->cur_boss_hp = $var;

        return $this;
    }

}

