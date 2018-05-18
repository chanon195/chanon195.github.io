<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserMeta.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserMeta</code>
 */
class MsgUserMeta extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaValueType value_type = 2;</code>
     */
    private $value_type = 0;
    /**
     * Generated from protobuf field <code>bool v_bool = 3;</code>
     */
    private $v_bool = false;
    /**
     * Generated from protobuf field <code>float v_float = 4;</code>
     */
    private $v_float = 0.0;
    /**
     * Generated from protobuf field <code>uint32 v_int = 5;</code>
     */
    private $v_int = 0;
    /**
     * Generated from protobuf field <code>string v_json = 6;</code>
     */
    private $v_json = '';
    /**
     * Generated from protobuf field <code>string v_string = 7;</code>
     */
    private $v_string = '';
    /**
     * Generated from protobuf field <code>uint64 create_date = 8;</code>
     */
    private $create_date = 0;

    public function __construct() {
        \GPBMetadata\MsgUserMeta::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\UserMetaType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaValueType value_type = 2;</code>
     * @return int
     */
    public function getValueType()
    {
        return $this->value_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.UserMetaValueType value_type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setValueType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\UserMetaValueType::class);
        $this->value_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool v_bool = 3;</code>
     * @return bool
     */
    public function getVBool()
    {
        return $this->v_bool;
    }

    /**
     * Generated from protobuf field <code>bool v_bool = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setVBool($var)
    {
        GPBUtil::checkBool($var);
        $this->v_bool = $var;

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

    /**
     * Generated from protobuf field <code>string v_json = 6;</code>
     * @return string
     */
    public function getVJson()
    {
        return $this->v_json;
    }

    /**
     * Generated from protobuf field <code>string v_json = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setVJson($var)
    {
        GPBUtil::checkString($var, True);
        $this->v_json = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string v_string = 7;</code>
     * @return string
     */
    public function getVString()
    {
        return $this->v_string;
    }

    /**
     * Generated from protobuf field <code>string v_string = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setVString($var)
    {
        GPBUtil::checkString($var, True);
        $this->v_string = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 8;</code>
     * @return int|string
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }

    /**
     * Generated from protobuf field <code>uint64 create_date = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreateDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->create_date = $var;

        return $this;
    }

}
