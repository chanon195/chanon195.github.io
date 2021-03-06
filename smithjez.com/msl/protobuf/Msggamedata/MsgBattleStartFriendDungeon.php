<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgBattleStartFriendDungeon.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgBattleStartFriendDungeon</code>
 */
class MsgBattleStartFriendDungeon extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 1;</code>
     */
    private $dungeon_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 2;</code>
     */
    private $monster_slot = null;
    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     */
    private $find_user_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\MsgBattleStartFriendDungeon::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 1;</code>
     * @return int|string
     */
    public function getDungeonId()
    {
        return $this->dungeon_id;
    }

    /**
     * Generated from protobuf field <code>uint64 dungeon_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDungeonId($var)
    {
        GPBUtil::checkUint64($var);
        $this->dungeon_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 2;</code>
     * @return \Msggamedata\MsgMonsterSlotData
     */
    public function getMonsterSlot()
    {
        return $this->monster_slot;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgMonsterSlotData monster_slot = 2;</code>
     * @param \Msggamedata\MsgMonsterSlotData $var
     * @return $this
     */
    public function setMonsterSlot($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgMonsterSlotData::class);
        $this->monster_slot = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     * @return int|string
     */
    public function getFindUserId()
    {
        return $this->find_user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 find_user_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFindUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->find_user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.FriendDungeonType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\FriendDungeonType::class);
        $this->type = $var;

        return $this;
    }

}

