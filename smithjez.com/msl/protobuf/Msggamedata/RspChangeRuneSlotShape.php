<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: RspChangeRuneSlotShape.proto

namespace Msggamedata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>msggamedata.RspChangeRuneSlotShape</code>
 */
class RspChangeRuneSlotShape extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     */
    private $user = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     */
    private $user_monster = null;
    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 3;</code>
     */
    private $user_rune = null;

    public function __construct() {
        \GPBMetadata\RspChangeRuneSlotShape::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     * @return \Msggamedata\MsgUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUser user = 1;</code>
     * @param \Msggamedata\MsgUser $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUser::class);
        $this->user = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     * @return \Msggamedata\MsgUserMonster
     */
    public function getUserMonster()
    {
        return $this->user_monster;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserMonster user_monster = 2;</code>
     * @param \Msggamedata\MsgUserMonster $var
     * @return $this
     */
    public function setUserMonster($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserMonster::class);
        $this->user_monster = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 3;</code>
     * @return \Msggamedata\MsgUserRune
     */
    public function getUserRune()
    {
        return $this->user_rune;
    }

    /**
     * Generated from protobuf field <code>.msggamedata.MsgUserRune user_rune = 3;</code>
     * @param \Msggamedata\MsgUserRune $var
     * @return $this
     */
    public function setUserRune($var)
    {
        GPBUtil::checkMessage($var, \Msggamedata\MsgUserRune::class);
        $this->user_rune = $var;

        return $this;
    }

}
