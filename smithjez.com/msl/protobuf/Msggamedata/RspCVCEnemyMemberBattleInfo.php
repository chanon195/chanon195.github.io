<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspCVCEnemyMemberBattleInfo.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspCVCEnemyMemberBattleInfo</code>
 */
class RspCVCEnemyMemberBattleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_member = 1;</code>
     */
    private $enemy_member = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCMemberSlotInfo enemy_member_slot_info = 2;</code>
     */
    private $enemy_member_slot_info = null;

    public function __construct() {
        \GPBMetadata\RspCVCEnemyMemberBattleInfo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_member = 1;</code>
     * @return \Msggamedata\MsgUserCVCMember
     */
    public function getEnemyMember()
    {
        return $this->enemy_member;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserCVCMember enemy_member = 1;</code>
     * @param \Msggamedata\MsgUserCVCMember $var
     * @return $this
     */
    public function setEnemyMember($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserCVCMember::class);
        $this->enemy_member = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCMemberSlotInfo enemy_member_slot_info = 2;</code>
     * @return \Msggamedata\MsgCVCMemberSlotInfo
     */
    public function getEnemyMemberSlotInfo()
    {
        return $this->enemy_member_slot_info;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgCVCMemberSlotInfo enemy_member_slot_info = 2;</code>
     * @param \Msggamedata\MsgCVCMemberSlotInfo $var
     * @return $this
     */
    public function setEnemyMemberSlotInfo($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgCVCMemberSlotInfo::class);
        $this->enemy_member_slot_info = $var;

        return $this;
    }

}

