<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqCompleteCombineSuperStone.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqCompleteCombineSuperStone</code>
 */
class ReqCompleteCombineSuperStone extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_rapid = 1;</code>
     */
    private $is_rapid = false;

    public function __construct() {
        \GPBMetadata\ReqCompleteCombineSuperStone::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool is_rapid = 1;</code>
     * @return bool
     */
    public function getIsRapid()
    {
        return $this->is_rapid;
    }

    /**
     * Generated from protobuf field <code>bool is_rapid = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRapid($var)
    {
        GPBUtil::checkBool($var);
        $this->is_rapid = $var;

        return $this;
    }

}
