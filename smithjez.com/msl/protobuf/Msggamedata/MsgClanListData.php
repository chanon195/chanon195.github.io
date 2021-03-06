<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgClanListData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgClanListData</code>
 */
class MsgClanListData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 clan_id = 1;</code>
     */
    private $clan_id = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     * Generated from protobuf field <code>uint32 lev = 3;</code>
     */
    private $lev = 0;
    /**
     * Generated from protobuf field <code>string comment = 4;</code>
     */
    private $comment = '';
    /**
     * Generated from protobuf field <code>uint32 emblem_id = 5;</code>
     */
    private $emblem_id = 0;
    /**
     * Generated from protobuf field <code>uint32 member_count = 6;</code>
     */
    private $member_count = 0;
    /**
     * Generated from protobuf field <code>uint32 max_member_count = 7;</code>
     */
    private $max_member_count = 0;
    /**
     * Generated from protobuf field <code>uint32 apprentice_count = 8;</code>
     */
    private $apprentice_count = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData master = 9;</code>
     */
    private $master = null;
    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 10;</code>
     */
    private $join_member_grade = 0;

    public function __construct() {
        \GPBMetadata\MsgClanListData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 clan_id = 1;</code>
     * @return int|string
     */
    public function getClanId()
    {
        return $this->clan_id;
    }

    /**
     * Generated from protobuf field <code>uint64 clan_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setClanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->clan_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 3;</code>
     * @return int
     */
    public function getLev()
    {
        return $this->lev;
    }

    /**
     * Generated from protobuf field <code>uint32 lev = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string comment = 4;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Generated from protobuf field <code>string comment = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 emblem_id = 5;</code>
     * @return int
     */
    public function getEmblemId()
    {
        return $this->emblem_id;
    }

    /**
     * Generated from protobuf field <code>uint32 emblem_id = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setEmblemId($var)
    {
        GPBUtil::checkUint32($var);
        $this->emblem_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 member_count = 6;</code>
     * @return int
     */
    public function getMemberCount()
    {
        return $this->member_count;
    }

    /**
     * Generated from protobuf field <code>uint32 member_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMemberCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->member_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max_member_count = 7;</code>
     * @return int
     */
    public function getMaxMemberCount()
    {
        return $this->max_member_count;
    }

    /**
     * Generated from protobuf field <code>uint32 max_member_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxMemberCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_member_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 apprentice_count = 8;</code>
     * @return int
     */
    public function getApprenticeCount()
    {
        return $this->apprentice_count;
    }

    /**
     * Generated from protobuf field <code>uint32 apprentice_count = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setApprenticeCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->apprentice_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData master = 9;</code>
     * @return \Msggamedata\MsgUserProfileData
     */
    public function getMaster()
    {
        return $this->master;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserProfileData master = 9;</code>
     * @param \Msggamedata\MsgUserProfileData $var
     * @return $this
     */
    public function setMaster($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserProfileData::class);
        $this->master = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 10;</code>
     * @return int
     */
    public function getJoinMemberGrade()
    {
        return $this->join_member_grade;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ClanMemberGrade join_member_grade = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setJoinMemberGrade($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ClanMemberGrade::class);
        $this->join_member_grade = $var;

        return $this;
    }

}

