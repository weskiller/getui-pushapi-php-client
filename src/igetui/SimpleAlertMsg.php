<?php

namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;

use GetuiLaboratory\GetuiPushAPICLIENT\Contracts\ApnMsgInterface;

class SimpleAlertMsg implements ApnMsgInterface
{

    protected $alertMsg;

    public function get_alertMsg() {
        return $this->alertMsg;
    }
}