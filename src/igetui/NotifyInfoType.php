<?php


namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;


use GetuiLaboratory\GetuiPushAPICLIENT\Protobuf\Type\PBEnum;

class NotifyInfoType extends PBEnum
{
    const _payload  = 0;
    const _intent  = 1;
    const _url  = 2;
}