<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspVoteRecommendMonsterParty.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspVoteRecommendMonsterParty</code>
 */
class RspVoteRecommendMonsterParty extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgRecommendMonsterParty recommend_monster_party = 1;</code>
     */
    private $recommend_monster_party = null;

    public function __construct() {
        \GPBMetadata\RspVoteRecommendMonsterParty::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgRecommendMonsterParty recommend_monster_party = 1;</code>
     * @return \Msggamedata\MsgRecommendMonsterParty
     */
    public function getRecommendMonsterParty()
    {
        return $this->recommend_monster_party;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgRecommendMonsterParty recommend_monster_party = 1;</code>
     * @param \Msggamedata\MsgRecommendMonsterParty $var
     * @return $this
     */
    public function setRecommendMonsterParty($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgRecommendMonsterParty::class);
        $this->recommend_monster_party = $var;

        return $this;
    }

}
