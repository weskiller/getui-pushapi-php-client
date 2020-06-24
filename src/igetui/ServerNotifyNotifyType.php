<?php


namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;


use GetuiLaboratory\GetuiPushAPICLIENT\Protobuf\Type\PBEnum;

class ServerNotifyNotifyType extends PBEnum
{
    const normal  = 0;
    const serverListChanged  = 1;
    const exception  = 2;
}