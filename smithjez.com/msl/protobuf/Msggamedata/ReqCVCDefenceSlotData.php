<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqCVCDefenceSlotData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqCVCDefenceSlotData</code>
 */
class ReqCVCDefenceSlotData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 clan_member_id = 1;</code>
     */
    private $clan_member_id = 0;

    public function __construct() {
        \GPBMetadata\ReqCVCDefenceSlotData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 clan_member_id = 1;</code>
     * @return int|string
     */
    public function getClanMemberId()
    {
        return $this->clan_member_id;
    }

    /**
     * Generated from protobuf field <code>uint64 clan_member_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClanMemberId($var)
    {
        GPBUtil::checkUint64($var);
        $this->clan_member_id = $var;

        return $this;
    }

}
