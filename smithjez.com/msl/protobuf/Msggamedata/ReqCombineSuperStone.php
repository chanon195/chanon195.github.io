<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqCombineSuperStone.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqCombineSuperStone</code>
 */
class ReqCombineSuperStone extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 item_uid = 1;</code>
     */
    private $item_uid = 0;

    public function __construct() {
        \GPBMetadata\ReqCombineSuperStone::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 item_uid = 1;</code>
     * @return int
     */
    public function getItemUid()
    {
        return $this->item_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 item_uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setItemUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->item_uid = $var;

        return $this;
    }

}

