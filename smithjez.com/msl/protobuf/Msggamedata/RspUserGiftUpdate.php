<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserGiftUpdate.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserGiftUpdate</code>
 */
class RspUserGiftUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated uint64 expired_user_gift_ids = 1;</code>
     */
    private $expired_user_gift_ids;
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift new_user_gifts = 2;</code>
     */
    private $new_user_gifts;

    public function __construct() {
        \GPBMetadata\RspUserGiftUpdate::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated uint64 expired_user_gift_ids = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExpiredUserGiftIds()
    {
        return $this->expired_user_gift_ids;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 expired_user_gift_ids = 1;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExpiredUserGiftIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->expired_user_gift_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift new_user_gifts = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNewUserGifts()
    {
        return $this->new_user_gifts;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgUserGift new_user_gifts = 2;</code>
     * @param \Msggamedata\MsgUserGift[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNewUserGifts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgUserGift::class);
        $this->new_user_gifts = $arr;

        return $this;
    }

}
