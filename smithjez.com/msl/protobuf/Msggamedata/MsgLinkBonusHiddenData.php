<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgLinkBonusHiddenData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgLinkBonusHiddenData</code>
 */
class MsgLinkBonusHiddenData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 2;</code>
     */
    private $monster_uids;

    public function __construct() {
        \GPBMetadata\MsgLinkBonusHiddenData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMonsterUids()
    {
        return $this->monster_uids;
    }

    /**
     * Generated from protobuf field <code>repeated fixed32 monster_uids = 2;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMonsterUids($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FIXED32);
        $this->monster_uids = $arr;

        return $this;
    }

}

