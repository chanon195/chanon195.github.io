<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspResetMonster.proto

namespace GPBMetadata;

class RspResetMonster
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserMonster::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87010a1552737052657365744d6f6e737465722e70726f746f120b6d73" .
            "6767616d656461746122440a0f52737052657365744d6f6e737465721231" .
            "0a0c757365725f6d6f6e7374657218012001280b321b2e6d736767616d65" .
            "646174612e4d7367557365724d6f6e7374657242130a11636f6d2e66656c" .
            "616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
