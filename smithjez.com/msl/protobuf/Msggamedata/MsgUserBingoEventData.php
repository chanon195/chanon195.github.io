<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgUserBingoEventData.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgUserBingoEventData</code>
 */
class MsgUserBingoEventData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     */
    private $user_id = 0;
    /**
     * Generated from protobuf field <code>uint64 bingo_event_id = 2;</code>
     */
    private $bingo_event_id = 0;
    /**
     * Generated from protobuf field <code>uint64 bingo_complete_event_uid = 3;</code>
     */
    private $bingo_complete_event_uid = 0;
    /**
     * Generated from protobuf field <code>string title = 4;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>uint64 start_local_date = 5;</code>
     */
    private $start_local_date = 0;
    /**
     * Generated from protobuf field <code>uint64 end_local_date = 6;</code>
     */
    private $end_local_date = 0;
    /**
     * Generated from protobuf field <code>uint32 complete_bingo_count = 7;</code>
     */
    private $complete_bingo_count = 0;
    /**
     * Generated from protobuf field <code>uint32 rewardable_idx = 8;</code>
     */
    private $rewardable_idx = 0;

    public function __construct() {
        \GPBMetadata\MsgUserBingoEventData::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @return int|string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Generated from protobuf field <code>uint64 user_id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkUint64($var);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bingo_event_id = 2;</code>
     * @return int|string
     */
    public function getBingoEventId()
    {
        return $this->bingo_event_id;
    }

    /**
     * Generated from protobuf field <code>uint64 bingo_event_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBingoEventId($var)
    {
        GPBUtil::checkUint64($var);
        $this->bingo_event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 bingo_complete_event_uid = 3;</code>
     * @return int|string
     */
    public function getBingoCompleteEventUid()
    {
        return $this->bingo_complete_event_uid;
    }

    /**
     * Generated from protobuf field <code>uint64 bingo_complete_event_uid = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setBingoCompleteEventUid($var)
    {
        GPBUtil::checkUint64($var);
        $this->bingo_complete_event_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 start_local_date = 5;</code>
     * @return int|string
     */
    public function getStartLocalDate()
    {
        return $this->start_local_date;
    }

    /**
     * Generated from protobuf field <code>uint64 start_local_date = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartLocalDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->start_local_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 end_local_date = 6;</code>
     * @return int|string
     */
    public function getEndLocalDate()
    {
        return $this->end_local_date;
    }

    /**
     * Generated from protobuf field <code>uint64 end_local_date = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEndLocalDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->end_local_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 complete_bingo_count = 7;</code>
     * @return int
     */
    public function getCompleteBingoCount()
    {
        return $this->complete_bingo_count;
    }

    /**
     * Generated from protobuf field <code>uint32 complete_bingo_count = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setCompleteBingoCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->complete_bingo_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 rewardable_idx = 8;</code>
     * @return int
     */
    public function getRewardableIdx()
    {
        return $this->rewardable_idx;
    }

    /**
     * Generated from protobuf field <code>uint32 rewardable_idx = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setRewardableIdx($var)
    {
        GPBUtil::checkUint32($var);
        $this->rewardable_idx = $var;

        return $this;
    }

}
