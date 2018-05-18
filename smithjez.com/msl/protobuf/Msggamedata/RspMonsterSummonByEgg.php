<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspMonsterSummonByEgg.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspMonsterSummonByEgg</code>
 */
class RspMonsterSummonByEgg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     */
    private $user_item = null;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster user_monsters = 3;</code>
     */
    private $user_monsters;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonsterDictData user_monster_dict_datas = 4;</code>
     */
    private $user_monster_dict_datas;
    /**
     * Generated from protobuf field <code>bool multiple_summon = 5;</code>
     */
    private $multiple_summon = false;

    public function __construct() {
        \GPBMetadata\RspMonsterSummonByEgg::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
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
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     * @return \Msggamedata\MsgUserItem
     */
    public function getUserItem()
    {
        return $this->user_item;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserItem user_item = 2;</code>
     * @param \Msggamedata\MsgUserItem $var
     * @return $this
     */
    public function setUserItem($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserItem::class);
        $this->user_item = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster user_monsters = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserMonsters()
    {
        return $this->user_monsters;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonster user_monsters = 3;</code>
     * @param \Msggamedata\MsgUserMonster[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserMonsters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserMonster::class);
        $this->user_monsters = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonsterDictData user_monster_dict_datas = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserMonsterDictDatas()
    {
        return $this->user_monster_dict_datas;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserMonsterDictData user_monster_dict_datas = 4;</code>
     * @param \Msggamedata\MsgUserMonsterDictData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserMonsterDictDatas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserMonsterDictData::class);
        $this->user_monster_dict_datas = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool multiple_summon = 5;</code>
     * @return bool
     */
    public function getMultipleSummon()
    {
        return $this->multiple_summon;
    }

    /**
     * Generated from protobuf field <code>bool multiple_summon = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setMultipleSummon($var)
    {
        GPBUtil::checkBool($var);
        $this->multiple_summon = $var;

        return $this;
    }

}
