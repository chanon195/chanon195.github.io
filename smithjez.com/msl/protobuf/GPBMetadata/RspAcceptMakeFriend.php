<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspAcceptMakeFriend.proto

namespace GPBMetadata;

class RspAcceptMakeFriend
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgFriend::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aa0010a195273704163636570744d616b65467269656e642e70726f746f" .
            "120b6d736767616d656461746122590a135273704163636570744d616b65" .
            "467269656e6412160a0e667269656e645f757365725f6964180120012804" .
            "122a0a0a6e65775f667269656e6418022001280b32162e6d736767616d65" .
            "646174612e4d7367467269656e6442130a11636f6d2e66656c616e69612e" .
            "6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

