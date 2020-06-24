<?php


namespace GetuiLaboratory\GetuiPushAPICLIENT\IGeTui;


use GetuiLaboratory\GetuiPushAPICLIENT\Protobuf\Type\PBEnum;

class ReqServListResultReqServHostResultCode extends PBEnum
{
    const successed  = 0;
    const failed  = 1;
    const busy  = 2;
}
