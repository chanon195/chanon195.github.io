<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspGetUserClanMonsterSlots.proto

namespace GPBMetadata;

class RspGetUserClanMonsterSlots
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserClanMonsterSlotList::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aae010a2052737047657455736572436c616e4d6f6e73746572536c6f74" .
            "732e70726f746f120b6d736767616d656461746122600a1a527370476574" .
            "55736572436c616e4d6f6e73746572536c6f747312420a116d6f6e737465" .
            "725f736c6f745f6c69737418012001280b32272e6d736767616d65646174" .
            "612e4d736755736572436c616e4d6f6e73746572536c6f744c6973744213" .
            "0a11636f6d2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
