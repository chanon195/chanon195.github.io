<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqWithdrawUnregAccount.proto

namespace GPBMetadata;

class ReqWithdrawUnregAccount
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\AccountPlatformType::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0adb010a1d5265715769746864726177556e7265674163636f756e742e70" .
            "726f746f120b6d736767616d6564617461228f010a175265715769746864" .
            "726177556e7265674163636f756e74120c0a047575696418012001280912" .
            "130a0b707269766174655f6b657918022001280912370a0d706c6174666f" .
            "726d5f7479706518032001280e32202e6d736767616d65646174612e4163" .
            "636f756e74506c6174666f726d5479706512180a10706c6174666f726d5f" .
            "757365725f696418042001280942130a11636f6d2e66656c616e69612e6d" .
            "736c6462620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

