<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetCaptureKingEntranceReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspGetCaptureKingEntranceReward</code>
 */
class RspGetCaptureKingEntranceReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 1;</code>
     */
    private $user_meta = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserGift user_gift = 2;</code>
     */
    private $user_gift = null;

    public function __construct() {
        \GPBMetadata\RspGetCaptureKingEntranceReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 1;</code>
     * @return \Msggamedata\MsgUserMeta
     */
    public function getUserMeta()
    {
        return $this->user_meta;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMeta user_meta = 1;</code>
     * @param \Msggamedata\MsgUserMeta $var
     * @return $this
     */
    public function setUserMeta($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMeta::class);
        $this->user_meta = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserGift user_gift = 2;</code>
     * @return \Msggamedata\MsgUserGift
     */
    public function getUserGift()
    {
        return $this->user_gift;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserGift user_gift = 2;</code>
     * @param \Msggamedata\MsgUserGift $var
     * @return $this
     */
    public function setUserGift($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserGift::class);
        $this->user_gift = $var;

        return $this;
    }

}
