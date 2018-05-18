<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserBingoReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserBingoReward</code>
 */
class RspUserBingoReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoData user_bingo_data = 1;</code>
     */
    private $user_bingo_data = null;
    /**
     * Generated from protobuf field <code>uint32 user_new_bingo_piece = 2;</code>
     */
    private $user_new_bingo_piece = 0;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 3;</code>
     */
    private $rewards;

    public function __construct() {
        \GPBMetadata\RspUserBingoReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoData user_bingo_data = 1;</code>
     * @return \Msggamedata\MsgUserBingoData
     */
    public function getUserBingoData()
    {
        return $this->user_bingo_data;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserBingoData user_bingo_data = 1;</code>
     * @param \Msggamedata\MsgUserBingoData $var
     * @return $this
     */
    public function setUserBingoData($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserBingoData::class);
        $this->user_bingo_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 user_new_bingo_piece = 2;</code>
     * @return int
     */
    public function getUserNewBingoPiece()
    {
        return $this->user_new_bingo_piece;
    }

    /**
     * Generated from protobuf field <code>uint32 user_new_bingo_piece = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUserNewBingoPiece($var)
    {
        GPBUtil::checkUint32($var);
        $this->user_new_bingo_piece = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRewards()
    {
        return $this->rewards;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift rewards = 3;</code>
     * @param \Msggamedata\MsgUserGift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRewards($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserGift::class);
        $this->rewards = $arr;

        return $this;
    }

}
