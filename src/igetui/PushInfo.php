<?php


namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;


use GetuiLaboratory\GetuiPushAPICLIENT\Protobuf\PBMessage;

class PushInfo extends PBMessage
{
    var $wired_type = PBMessage::WIRED_LENGTH_DELIMITED;
    public function __construct($reader=null)
    {
        parent::__construct($reader);
        $this->fields["1"] = "PBString";
        $this->values["1"] = "";
        $this->fields["2"] = "PBString";
        $this->values["2"] = "";
        $this->fields["3"] = "PBString";
        $this->values["3"] = "";
        $this->fields["4"] = "PBString";
        $this->values["4"] = "";
        $this->fields["5"] = "PBString";
        $this->values["5"] = "";
        $this->fields["6"] = "PBString";
        $this->values["6"] = "";
        $this->fields["7"] = "PBString";
        $this->values["7"] = "";
        $this->fields["8"] = "PBString";
        $this->values["8"] = "";
        $this->fields["9"] = "PBString";
        $this->values["9"] = "";
        $this->fields["10"] = "PBInt";
        $this->values["10"] = "";
        $this->fields["11"] = "PBBool";
        $this->values["11"] = "";
        $this->fields["12"] = "PBString";
        $this->values["12"] = "";
        $this->fields["13"] = "PBBool";
        $this->values["13"] = "";
        $this->fields["14"] = "PBString";
        $this->values["14"] = "";
        $this->fields["15"] = "PBBool";
        $this->values["15"] = "";
        $this->fields["16"] = "NotifyInfo";
        $this->values["16"] = "";
    }
    function message()
    {
        return $this->_get_value("1");
    }
    function set_message($value)
    {
        $this->_set_value("1", $value);
    }
    function actionKey()
    {
        return $this->_get_value("2");
    }
    function set_actionKey($value)
    {
        $this->_set_value("2", $value);
    }
    function sound()
    {
        return $this->_get_value("3");
    }
    function set_sound($value)
    {
        $this->_set_value("3", $value);
    }
    function badge()
    {
        return $this->_get_value("4");
    }
    function set_badge($value)
    {
        $this->_set_value("4", $value);
    }
    function payload()
    {
        return $this->_get_value("5");
    }
    function set_payload($value)
    {
        $this->_set_value("5", $value);
    }
    function locKey()
    {
        return $this->_get_value("6");
    }
    function set_locKey($value)
    {
        $this->_set_value("6", $value);
    }
    function locArgs()
    {
        return $this->_get_value("7");
    }
    function set_locArgs($value)
    {
        $this->_set_value("7", $value);
    }
    function actionLocKey()
    {
        return $this->_get_value("8");
    }
    function set_actionLocKey($value)
    {
        $this->_set_value("8", $value);
    }
    function launchImage()
    {
        return $this->_get_value("9");
    }
    function set_launchImage($value)
    {
        $this->_set_value("9", $value);
    }
    function contentAvailable()
    {
        return $this->_get_value("10");
    }
    function set_contentAvailable($value)
    {
        $this->_set_value("10", $value);
    }
    function invalidAPN()
    {
        return $this->_get_value("11");
    }
    function set_invalidAPN($value)
    {
        $this->_set_value("11", $value);
    }
    function apnJson()
    {
        return $this->_get_value("12");
    }
    function set_apnJson($value)
    {
        $this->_set_value("12", $value);
    }
    function invalidMPN()
    {
        return $this->_get_value("13");
    }
    function set_invalidMPN($value)
    {
        $this->_set_value("13", $value);
    }
    function mpnXml()
    {
        return $this->_get_value("14");
    }
    function set_mpnXml($value)
    {
        $this->_set_value("14", $value);
    }
    function validNotify()
    {
        return $this->_get_value("15");
    }
    function set_validNotify($value)
    {
        $this->_set_value("15", $value);
    }
    function notifyInfo()
    {
        return $this->_get_value("16");
    }
    function set_notifyInfo($value)
    {
        $this->_set_value("16", $value);
    }
}
