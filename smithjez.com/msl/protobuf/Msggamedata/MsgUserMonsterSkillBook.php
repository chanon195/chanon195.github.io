<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserMonsterSkillBook.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserMonsterSkillBook</code>
 */
class MsgUserMonsterSkillBook extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 1;</code>
     */
    private $root_monster_uid = 0;
    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     */
    private $count = 0;
    /**
     * Generated from protobuf field <code>uint64 update_date = 3;</code>
     */
    private $update_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserMonsterSkillBook::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 1;</code>
     * @return int
     */
    public function getRootMonsterUid()
    {
        return $this->root_monster_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 root_monster_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRootMonsterUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->root_monster_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>uint32 count = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 update_date = 3;</code>
     * @return int|string
     */
    public function getUpdateDate()
    {
        return $this->update_date;
    }

    /**
     * Generated from protobuf field <code>uint64 update_date = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUpdateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->update_date = $var;

        return $this;
    }

}

