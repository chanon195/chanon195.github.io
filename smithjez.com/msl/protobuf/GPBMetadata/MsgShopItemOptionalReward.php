<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgShopItemOptionalReward.proto

namespace GPBMetadata;

class MsgShopItemOptionalReward
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\RewardDataType::initOnce();
        \GPBMetadata\MsgUidAndAmount::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af4010a1f4d736753686f704974656d4f7074696f6e616c526577617264" .
            "2e70726f746f120b6d736767616d65646174611a154d7367556964416e64" .
            "416d6f756e742e70726f746f228f010a194d736753686f704974656d4f70" .
            "74696f6e616c526577617264122e0a09646174615f747970651801200128" .
            "0e321b2e6d736767616d65646174612e5265776172644461746154797065" .
            "12120a0a76616c75655f6461746118022001280d122e0a087569645f6461" .
            "746118032001280b321c2e6d736767616d65646174612e4d736755696441" .
            "6e64416d6f756e7442130a11636f6d2e66656c616e69612e6d736c646262" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
