<?php


namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;


use GetuiLaboratory\GetuiPushAPICLIENT\Protobuf\Type\PBEnum;

class SMSStatus extends PBEnum
{
    const unread  = 0;
    const read  = 1;
}