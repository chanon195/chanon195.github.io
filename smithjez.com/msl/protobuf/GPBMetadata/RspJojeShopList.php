<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspJojeShopList.proto

namespace GPBMetadata;

class RspJojeShopList
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\MsgUser::initOnce();
        \GPBMetadata\MsgUserJojeShop::initOnce();
        \GPBMetadata\MsgJojeShopList::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a94020a155273704a6f6a6553686f704c6973742e70726f746f120b6d73" .
            "6767616d65646174611a154d7367557365724a6f6a6553686f702e70726f" .
            "746f1a154d73674a6f6a6553686f704c6973742e70726f746f22a2010a0f" .
            "5273704a6f6a6553686f704c69737412220a047573657218012001280b32" .
            "142e6d736767616d65646174612e4d73675573657212340a0e757365725f" .
            "6a6f6a655f73686f7018022001280b321c2e6d736767616d65646174612e" .
            "4d7367557365724a6f6a6553686f7012350a0f6a6f6a655f73686f705f6c" .
            "6973747318032003280b321c2e6d736767616d65646174612e4d73674a6f" .
            "6a6553686f704c69737442130a11636f6d2e66656c616e69612e6d736c64" .
            "62620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
