<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgCaptureKingUserHistory.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgCaptureKingUserHistory</code>
 */
class MsgCaptureKingUserHistory extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 reward_date = 1;</code>
     */
    private $reward_date = 0;
    /**
     * Generated from protobuf field <code>uint32 cumulative_point = 2;</code>
     */
    private $cumulative_point = 0;
    /**
     * Generated from protobuf field <code>uint32 rare_1_capture_count = 3;</code>
     */
    private $rare_1_capture_count = 0;
    /**
     * Generated from protobuf field <code>uint32 rare_2_capture_count = 4;</code>
     */
    private $rare_2_capture_count = 0;
    /**
     * Generated from protobuf field <code>uint32 rare_3_capture_count = 5;</code>
     */
    private $rare_3_capture_count = 0;
    /**
     * Generated from protobuf field <code>uint32 rare_4_capture_count = 6;</code>
     */
    private $rare_4_capture_count = 0;
    /**
     * Generated from protobuf field <code>uint32 last_cumulative_point = 7;</code>
     */
    private $last_cumulative_point = 0;
    /**
     * Generated from protobuf field <code>uint32 season_index = 8;</code>
     */
    private $season_index = 0;

    public function __construct() {
        \GPBMetadata\MsgCaptureKingUserHistory::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 reward_date = 1;</code>
     * @return int|string
     */
    public function getRewardDate()
    {
        return $this->reward_date;
    }

    /**
     * Generated from protobuf field <code>uint64 reward_date = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRewardDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->reward_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 cumulative_point = 2;</code>
     * @return int
     */
    public function getCumulativePoint()
    {
        return $this->cumulative_point;
    }

    /**
     * Generated from protobuf field <code>uint32 cumulative_point = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setCumulativePoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->cumulative_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_1_capture_count = 3;</code>
     * @return int
     */
    public function getRare1CaptureCount()
    {
        return $this->rare_1_capture_count;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_1_capture_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setRare1CaptureCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->rare_1_capture_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_2_capture_count = 4;</code>
     * @return int
     */
    public function getRare2CaptureCount()
    {
        return $this->rare_2_capture_count;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_2_capture_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRare2CaptureCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->rare_2_capture_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_3_capture_count = 5;</code>
     * @return int
     */
    public function getRare3CaptureCount()
    {
        return $this->rare_3_capture_count;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_3_capture_count = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setRare3CaptureCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->rare_3_capture_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_4_capture_count = 6;</code>
     * @return int
     */
    public function getRare4CaptureCount()
    {
        return $this->rare_4_capture_count;
    }

    /**
     * Generated from protobuf field <code>uint32 rare_4_capture_count = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRare4CaptureCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->rare_4_capture_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 last_cumulative_point = 7;</code>
     * @return int
     */
    public function getLastCumulativePoint()
    {
        return $this->last_cumulative_point;
    }

    /**
     * Generated from protobuf field <code>uint32 last_cumulative_point = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLastCumulativePoint($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_cumulative_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 season_index = 8;</code>
     * @return int
     */
    public function getSeasonIndex()
    {
        return $this->season_index;
    }

    /**
     * Generated from protobuf field <code>uint32 season_index = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setSeasonIndex($var)
    {
        GPBUtil::checkUint32($var);
        $this->season_index = $var;

        return $this;
    }

}

