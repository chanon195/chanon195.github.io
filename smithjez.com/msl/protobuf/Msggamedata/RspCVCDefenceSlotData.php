<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCVCDefenceSlotData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspCVCDefenceSlotData</code>
 */
class RspCVCDefenceSlotData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.CVCBattleUsedMonsterSlotData defender_monster_slot = 1;</code>
     */
    private $defender_monster_slot = null;

    public function __construct() {
        \GPBMetadata\RspCVCDefenceSlotData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCBattleUsedMonsterSlotData defender_monster_slot = 1;</code>
     * @return \Msggamedata\CVCBattleUsedMonsterSlotData
     */
    public function getDefenderMonsterSlot()
    {
        return $this->defender_monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.CVCBattleUsedMonsterSlotData defender_monster_slot = 1;</code>
     * @param \Msggamedata\CVCBattleUsedMonsterSlotData $var
     * @return $this
     */
    public function setDefenderMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\CVCBattleUsedMonsterSlotData::class);
        $this->defender_monster_slot = $var;

        return $this;
    }

}
