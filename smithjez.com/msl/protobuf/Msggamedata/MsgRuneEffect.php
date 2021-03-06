<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgRuneEffect.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgRuneEffect</code>
 */
class MsgRuneEffect extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.RuneEffectType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 2;</code>
     */
    private $element = 0;
    /**
     * Generated from protobuf field <code>float prob = 3;</code>
     */
    private $prob = 0.0;
    /**
     * Generated from protobuf field <code>float v_float = 4;</code>
     */
    private $v_float = 0.0;
    /**
     * Generated from protobuf field <code>uint32 v_int = 5;</code>
     */
    private $v_int = 0;

    public function __construct() {
        \GPBMetadata\MsgRuneEffect::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RuneEffectType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.RuneEffectType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\RuneEffectType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 2;</code>
     * @return int
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterElementType element = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setElement($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterElementType::class);
        $this->element = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float prob = 3;</code>
     * @return float
     */
    public function getProb()
    {
        return $this->prob;
    }

    /**
     * Generated from protobuf field <code>float prob = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setProb($var)
    {
        GPBUtil::checkFloat($var);
        $this->prob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float v_float = 4;</code>
     * @return float
     */
    public function getVFloat()
    {
        return $this->v_float;
    }

    /**
     * Generated from protobuf field <code>float v_float = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setVFloat($var)
    {
        GPBUtil::checkFloat($var);
        $this->v_float = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 v_int = 5;</code>
     * @return int
     */
    public function getVInt()
    {
        return $this->v_int;
    }

    /**
     * Generated from protobuf field <code>uint32 v_int = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setVInt($var)
    {
        GPBUtil::checkUint32($var);
        $this->v_int = $var;

        return $this;
    }

}

