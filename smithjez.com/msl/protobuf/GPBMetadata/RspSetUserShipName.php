<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspSetUserShipName.proto

namespace GPBMetadata;

class RspSetUserShipName
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUserShip::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a87010a1852737053657455736572536869704e616d652e70726f746f12" .
            "0b6d736767616d656461746122410a125273705365745573657253686970" .
            "4e616d65122b0a09757365725f7368697018012001280b32182e6d736767" .
            "616d65646174612e4d7367557365725368697042130a11636f6d2e66656c" .
            "616e69612e6d736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
