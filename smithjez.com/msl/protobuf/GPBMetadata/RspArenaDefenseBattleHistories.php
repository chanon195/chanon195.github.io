<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspArenaDefenseBattleHistories.proto

namespace GPBMetadata;

class RspArenaDefenseBattleHistories
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgArenaBattleHistory::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab0010a245273704172656e61446566656e7365426174746c6548697374" .
            "6f726965732e70726f746f120b6d736767616d6564617461225e0a1e5273" .
            "704172656e61446566656e7365426174746c65486973746f72696573123c" .
            "0a10626174746c655f686973746f7269657318012003280b32222e6d7367" .
            "67616d65646174612e4d73674172656e61426174746c65486973746f7279" .
            "42130a11636f6d2e66656c616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
