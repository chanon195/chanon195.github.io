<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUpdateResetCountOfDungeonHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUpdateResetCountOfDungeonHistory</code>
 */
class RspUpdateResetCountOfDungeonHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserDungeonStageHistory user_dungeon_stage_history = 1;</code>
     */
    private $user_dungeon_stage_history = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     */
    private $user = null;

    public function __construct() {
        \GPBMetadata\RspUpdateResetCountOfDungeonHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserDungeonStageHistory user_dungeon_stage_history = 1;</code>
     * @return \Msggamedata\MsgUserDungeonStageHistory
     */
    public function getUserDungeonStageHistory()
    {
        return $this->user_dungeon_stage_history;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserDungeonStageHistory user_dungeon_stage_history = 1;</code>
     * @param \Msggamedata\MsgUserDungeonStageHistory $var
     * @return $this
     */
    public function setUserDungeonStageHistory($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserDungeonStageHistory::class);
        $this->user_dungeon_stage_history = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 2;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

}
