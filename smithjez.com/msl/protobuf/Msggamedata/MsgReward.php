<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgReward.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgReward</code>
 */
class MsgReward extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.ResourceType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>fixed32 uid = 2;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>uint32 val = 3;</code>
     */
    private $val = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 4;</code>
     */
    private $stat_weight_type = 0;

    public function __construct() {
        \GPBMetadata\MsgReward::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ResourceType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.ResourceType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\ResourceType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 2;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 2;</code>
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
     * Generated from protobuf field <code>uint32 val = 3;</code>
     * @return int
     */
    public function getVal()
    {
        return $this->val;
    }

    /**
     * Generated from protobuf field <code>uint32 val = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setVal($var)
    {
        GPBUtil::checkUint32($var);
        $this->val = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 4;</code>
     * @return int
     */
    public function getStatWeightType()
    {
        return $this->stat_weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType stat_weight_type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setStatWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->stat_weight_type = $var;

        return $this;
    }

}
