<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemMetaCash.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgShopItemMetaCash</code>
 */
class MsgShopItemMetaCash extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaCash.CashMetaData cash_metas = 1;</code>
     */
    private $cash_metas;

    public function __construct() {
        \GPBMetadata\MsgShopItemMetaCash::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaCash.CashMetaData cash_metas = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCashMetas()
    {
        return $this->cash_metas;
    }

    /**
     * Generated from protobuf field <code>repeated .msggamedata.MsgShopItemMetaCash.CashMetaData cash_metas = 1;</code>
     * @param \Msggamedata\MsgShopItemMetaCash_CashMetaData[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCashMetas($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Msggamedata\MsgShopItemMetaCash_CashMetaData::class);
        $this->cash_metas = $arr;

        return $this;
    }

}
