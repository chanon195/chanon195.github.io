<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgNotice.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgNotice</code>
 */
class MsgNotice extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     */
    private $id = 0;
    /**
     * Generated from protobuf field <code>string title = 2;</code>
     */
    private $title = '';
    /**
     * Generated from protobuf field <code>string message = 3;</code>
     */
    private $message = '';
    /**
     * Generated from protobuf field <code>uint32 repeat_count = 4;</code>
     */
    private $repeat_count = 0;
    /**
     * Generated from protobuf field <code>uint64 open_date = 5;</code>
     */
    private $open_date = 0;
    /**
     * Generated from protobuf field <code>uint64 close_date = 6;</code>
     */
    private $close_date = 0;
    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     */
    private $image_url = '';
    /**
     * Generated from protobuf field <code>string smallimage_url = 8;</code>
     */
    private $smallimage_url = '';
    /**
     * Generated from protobuf field <code>string link_url = 9;</code>
     */
    private $link_url = '';
    /**
     * Generated from protobuf field <code>string dlg_btn_ok = 10;</code>
     */
    private $dlg_btn_ok = '';
    /**
     * Generated from protobuf field <code>string dlg_btn_close = 11;</code>
     */
    private $dlg_btn_close = '';
    /**
     * Generated from protobuf field <code>uint64 event_id = 12;</code>
     */
    private $event_id = 0;
    /**
     * Generated from protobuf field <code>.msggamedata.AdminNoticeType type = 13;</code>
     */
    private $type = 0;

    public function __construct() {
        \GPBMetadata\MsgNotice::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @return int|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>uint64 id = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>string title = 2;</code>
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
     * Generated from protobuf field <code>string message = 3;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 repeat_count = 4;</code>
     * @return int
     */
    public function getRepeatCount()
    {
        return $this->repeat_count;
    }

    /**
     * Generated from protobuf field <code>uint32 repeat_count = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setRepeatCount($var)
    {
        GPBUtil::checkUint32($var);
        $this->repeat_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 open_date = 5;</code>
     * @return int|string
     */
    public function getOpenDate()
    {
        return $this->open_date;
    }

    /**
     * Generated from protobuf field <code>uint64 open_date = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setOpenDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->open_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 close_date = 6;</code>
     * @return int|string
     */
    public function getCloseDate()
    {
        return $this->close_date;
    }

    /**
     * Generated from protobuf field <code>uint64 close_date = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCloseDate($var)
    {
        GPBUtil::checkUint64($var);
        $this->close_date = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * Generated from protobuf field <code>string image_url = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setImageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->image_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string smallimage_url = 8;</code>
     * @return string
     */
    public function getSmallimageUrl()
    {
        return $this->smallimage_url;
    }

    /**
     * Generated from protobuf field <code>string smallimage_url = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSmallimageUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->smallimage_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string link_url = 9;</code>
     * @return string
     */
    public function getLinkUrl()
    {
        return $this->link_url;
    }

    /**
     * Generated from protobuf field <code>string link_url = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setLinkUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dlg_btn_ok = 10;</code>
     * @return string
     */
    public function getDlgBtnOk()
    {
        return $this->dlg_btn_ok;
    }

    /**
     * Generated from protobuf field <code>string dlg_btn_ok = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setDlgBtnOk($var)
    {
        GPBUtil::checkString($var, True);
        $this->dlg_btn_ok = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dlg_btn_close = 11;</code>
     * @return string
     */
    public function getDlgBtnClose()
    {
        return $this->dlg_btn_close;
    }

    /**
     * Generated from protobuf field <code>string dlg_btn_close = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setDlgBtnClose($var)
    {
        GPBUtil::checkString($var, True);
        $this->dlg_btn_close = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 event_id = 12;</code>
     * @return int|string
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>uint64 event_id = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkUint64($var);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AdminNoticeType type = 13;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.AdminNoticeType type = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Msggamedata\AdminNoticeType::class);
        $this->type = $var;

        return $this;
    }

}

