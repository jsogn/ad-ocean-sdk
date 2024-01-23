<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 咨询锚点，当anchor_type=PRIVATE_CHAT时返回的锚点
class NativeAnchorDetailGetResponseListPrivateChatAnchorData extends Data
{

    /**
     * @var string $chat_guide 咨询引导文案，如私信获取一对一解答，不超过9个字
     */
    public string $chat_guide;
    
    /**
     * @var string $button 按钮文案，可选私信商家、立即咨询、咨询顾问、咨询设计师、问问老师 可选值:
     */
    public string $button;
    
}