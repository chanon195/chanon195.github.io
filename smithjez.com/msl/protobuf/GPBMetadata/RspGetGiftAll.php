<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetGiftAll.proto

namespace GPBMetadata;

class RspGetGiftAll
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserGift::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a7e0a1352737047657447696674416c6c2e70726f746f120b6d73676761" .
            "6d6564617461223d0a0d52737047657447696674416c6c122c0a0a757365" .
            "725f676966747318012003280b32182e6d736767616d65646174612e4d73" .
            "67557365724769667442130a11636f6d2e66656c616e69612e6d736c6462" .
            "620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

