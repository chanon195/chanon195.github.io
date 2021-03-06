<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspUserRegister.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspUserRegister</code>
 */
class RspUserRegister extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string private_key = 1;</code>
     */
    private $private_key = '';
    /**
     * Generated from protobuf field <code>string public_key = 2;</code>
     */
    private $public_key = '';
    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     */
    private $platform_type = 0;

    public function __construct() {
        \GPBMetadata\RspUserRegister::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string private_key = 1;</code>
     * @return string
     */
    public function getPrivateKey()
    {
        return $this->private_key;
    }

    /**
     * Generated from protobuf field <code>string private_key = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPrivateKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->private_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string public_key = 2;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * Generated from protobuf field <code>string public_key = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->public_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     * @return int
     */
    public function getPlatformType()
    {
        return $this->platform_type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AccountPlatformType platform_type = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setPlatformType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\AccountPlatformType::class);
        $this->platform_type = $var;

        return $this;
    }

}

