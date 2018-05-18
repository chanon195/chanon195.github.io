<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgItemTypeMonsterRelease.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgItemTypeMonsterRelease</code>
 */
class MsgItemTypeMonsterRelease extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     */
    private $element_type = 0;
    /**
     * Generated from protobuf field <code>fixed32 normal_random_uid = 2;</code>
     */
    private $normal_random_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 special_random_uid = 3;</code>
     */
    private $special_random_uid = 0;

    public function __construct() {
        \GPBMetadata\MsgItemTypeMonsterRelease::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     * @return int
     */
    public function getElementType()
    {
        return $this->element_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element_type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setElementType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterElementType::class);
        $this->element_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 normal_random_uid = 2;</code>
     * @return int
     */
    public function getNormalRandomUid()
    {
        return $this->normal_random_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 normal_random_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNormalRandomUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->normal_random_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 special_random_uid = 3;</code>
     * @return int
     */
    public function getSpecialRandomUid()
    {
        return $this->special_random_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 special_random_uid = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setSpecialRandomUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->special_random_uid = $var;

        return $this;
    }

}
