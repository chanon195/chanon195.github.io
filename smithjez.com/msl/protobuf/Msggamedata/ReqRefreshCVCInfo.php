<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: ReqRefreshCVCInfo.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.ReqRefreshCVCInfo</code>
 */
class ReqRefreshCVCInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool request_prev_phase_data = 1;</code>
     */
    private $request_prev_phase_data = false;

    public function __construct() {
        \GPBMetadata\ReqRefreshCVCInfo::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>bool request_prev_phase_data = 1;</code>
     * @return bool
     */
    public function getRequestPrevPhaseData()
    {
        return $this->request_prev_phase_data;
    }

    /**
     * Generated from protobuf field <code>bool request_prev_phase_data = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequestPrevPhaseData($var)
    {
        GPBUtil::checkBool($var);
        $this->request_prev_phase_data = $var;

        return $this;
    }

}
