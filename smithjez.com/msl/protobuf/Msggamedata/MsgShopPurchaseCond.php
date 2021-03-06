<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopPurchaseCond.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopPurchaseCond</code>
 */
class MsgShopPurchaseCond extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.RuleType rule = 1;</code>
     */
    private $rule = 0;
    /**
     * Generated from protobuf field <code>uint32 day_value = 2;</code>
     */
    private $day_value = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.WeekValue week_value = 3;</code>
     */
    private $week_value = 0;
    /**
     * Generated from protobuf field <code>uint32 month_value = 4;</code>
     */
    private $month_value = 0;

    public function __construct() {
        \GPBMetadata\MsgShopPurchaseCond::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.RuleType rule = 1;</code>
     * @return int
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.RuleType rule = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRule($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgShopPurchaseCond_RuleType::class);
        $this->rule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 day_value = 2;</code>
     * @return int
     */
    public function getDayValue()
    {
        return $this->day_value;
    }

    /**
     * Generated from protobuf field <code>uint32 day_value = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDayValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->day_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.WeekValue week_value = 3;</code>
     * @return int
     */
    public function getWeekValue()
    {
        return $this->week_value;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgShopPurchaseCond.WeekValue week_value = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWeekValue($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\MsgShopPurchaseCond_WeekValue::class);
        $this->week_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 month_value = 4;</code>
     * @return int
     */
    public function getMonthValue()
    {
        return $this->month_value;
    }

    /**
     * Generated from protobuf field <code>uint32 month_value = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setMonthValue($var)
    {
        GPBUtil::checkUint32($var);
        $this->month_value = $var;

        return $this;
    }

}

