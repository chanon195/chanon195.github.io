<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspResponseClanApply.proto

namespace GPBMetadata;

class RspResponseClanApply
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserClanMember::initOnce();
        \GPBMetadata\MsgUserClanJoinApply::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a92020a1a527370526573706f6e7365436c616e4170706c792e70726f74" .
            "6f120b6d736767616d65646174611a1a4d736755736572436c616e4a6f69" .
            "6e4170706c792e70726f746f22ad010a14527370526573706f6e7365436c" .
            "616e4170706c79120f0a07757365725f696418012001280412380a10636c" .
            "616e5f6d656d6265725f6c69737418022003280b321e2e6d736767616d65" .
            "646174612e4d736755736572436c616e4d656d626572120e0a0661636365" .
            "7074180320012808123a0a0f6170706c795f757365725f6c697374180420" .
            "03280b32212e6d736767616d65646174612e4d736755736572436c616e4a" .
            "6f696e4170706c7942130a11636f6d2e66656c616e69612e6d736c646262" .
            "0670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
