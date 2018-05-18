<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: MsgSubHelp.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.MsgSubHelp</code>
 */
class MsgSubHelp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     */
    private $uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 help_uid = 2;</code>
     */
    private $help_uid = 0;
    /**
     * Generated from protobuf field <code>fixed32 title = 3;</code>
     */
    private $title = 0;
    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     */
    private $desc = 0;

    public function __construct() {
        \GPBMetadata\MsgSubHelp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 uid = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 help_uid = 2;</code>
     * @return int
     */
    public function getHelpUid()
    {
        return $this->help_uid;
    }

    /**
     * Generated from protobuf field <code>fixed32 help_uid = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setHelpUid($var)
    {
        GPBUtil::checkUint32($var);
        $this->help_uid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 title = 3;</code>
     * @return int
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Generated from protobuf field <code>fixed32 title = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkUint32($var);
        $this->title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     * @return int
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Generated from protobuf field <code>fixed32 desc = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setDesc($var)
    {
        GPBUtil::checkUint32($var);
        $this->desc = $var;

        return $this;
    }

}
