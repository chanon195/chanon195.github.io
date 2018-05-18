<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSupportMonsterHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSupportMonsterHistory</code>
 */
class MsgSupportMonsterHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated fixed32 support_monster_uid = 1;</code>
     */
    private $support_monster_uid;
    /**
     * Generated from protobuf field <code>repeated uint64 support_monster_expired_date = 2;</code>
     */
    private $support_monster_expired_date;

    public function __construct() {
        \GPBMetadata\MsgSupportMonsterHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 support_monster_uid = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportMonsterUid()
    {
        return $this->support_monster_uid;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 support_monster_uid = 1;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportMonsterUid($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->support_monster_uid = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 support_monster_expired_date = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportMonsterExpiredDate()
    {
        return $this->support_monster_expired_date;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 support_monster_expired_date = 2;</code>
     * @param int[]|string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportMonsterExpiredDate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->support_monster_expired_date = $arr;

        return $this;
    }

}
