<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgMonsterType.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgMonsterType</code>
 */
class MsgMonsterType extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType weight_type = 2;</code>
     */
    private $weight_type = 0;
    /**
     * Generated from protobuf field <code>float attack_weight = 3;</code>
     */
    private $attack_weight = 0.0;
    /**
     * Generated from protobuf field <code>float defence_weight = 4;</code>
     */
    private $defence_weight = 0.0;
    /**
     * Generated from protobuf field <code>float heal_weight = 5;</code>
     */
    private $heal_weight = 0.0;
    /**
     * Generated from protobuf field <code>float hp_weight = 6;</code>
     */
    private $hp_weight = 0.0;
    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 11;</code>
     */
    private $evolution = 0;
    /**
     * Generated from protobuf field <code>float prob_weight = 12;</code>
     */
    private $prob_weight = 0.0;
    /**
     * Generated from protobuf field <code>uint32 sp = 13;</code>
     */
    private $sp = 0;

    public function __construct() {
        \GPBMetadata\MsgMonsterType::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType weight_type = 2;</code>
     * @return int
     */
    public function getWeightType()
    {
        return $this->weight_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterStatWeightType weight_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setWeightType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterStatWeightType::class);
        $this->weight_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float attack_weight = 3;</code>
     * @return float
     */
    public function getAttackWeight()
    {
        return $this->attack_weight;
    }

    /**
     * Generated from protobuf field <code>float attack_weight = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAttackWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->attack_weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float defence_weight = 4;</code>
     * @return float
     */
    public function getDefenceWeight()
    {
        return $this->defence_weight;
    }

    /**
     * Generated from protobuf field <code>float defence_weight = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setDefenceWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->defence_weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float heal_weight = 5;</code>
     * @return float
     */
    public function getHealWeight()
    {
        return $this->heal_weight;
    }

    /**
     * Generated from protobuf field <code>float heal_weight = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setHealWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->heal_weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float hp_weight = 6;</code>
     * @return float
     */
    public function getHpWeight()
    {
        return $this->hp_weight;
    }

    /**
     * Generated from protobuf field <code>float hp_weight = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setHpWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->hp_weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 11;</code>
     * @return int
     */
    public function getEvolution()
    {
        return $this->evolution;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MonsterEvolution evolution = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setEvolution($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MonsterEvolution::class);
        $this->evolution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float prob_weight = 12;</code>
     * @return float
     */
    public function getProbWeight()
    {
        return $this->prob_weight;
    }

    /**
     * Generated from protobuf field <code>float prob_weight = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setProbWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->prob_weight = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 sp = 13;</code>
     * @return int
     */
    public function getSp()
    {
        return $this->sp;
    }

    /**
     * Generated from protobuf field <code>uint32 sp = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setSp($var)
    {
        GPBUtil::checkUint32($var);
        $this->sp = $var;

        return $this;
    }

}

