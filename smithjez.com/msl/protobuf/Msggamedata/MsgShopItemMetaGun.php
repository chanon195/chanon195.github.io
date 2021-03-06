<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemMetaGun.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemMetaGun</code>
 */
class MsgShopItemMetaGun extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 max_lev = 1;</code>
     */
    private $max_lev = 0;
    /**
     * Generated from protobuf field <code>repeated float lev_values = 2;</code>
     */
    private $lev_values;
    /**
     * Generated from protobuf field <code>float price_inc = 3;</code>
     */
    private $price_inc = 0.0;

    public function __construct() {
        \GPBMetadata\MsgShopItemMetaGun::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint32 max_lev = 1;</code>
     * @return int
     */
    public function getMaxLev()
    {
        return $this->max_lev;
    }

    /**
     * Generated from protobuf field <code>uint32 max_lev = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxLev($var)
    {
        GPBUtil::checkUint32($var);
        $this->max_lev = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated float lev_values = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLevValues()
    {
        return $this->lev_values;
    }

    /**
     * Generated from protobuf field <code>repeated float lev_values = 2;</code>
     * @param float[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLevValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::FLOAT);
        $this->lev_values = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float price_inc = 3;</code>
     * @return float
     */
    public function getPriceInc()
    {
        return $this->price_inc;
    }

    /**
     * Generated from protobuf field <code>float price_inc = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setPriceInc($var)
    {
        GPBUtil::checkFloat($var);
        $this->price_inc = $var;

        return $this;
    }

}

