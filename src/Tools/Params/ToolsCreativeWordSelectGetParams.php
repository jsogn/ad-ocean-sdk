<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Params;

use AdOceanSdk\RequestParams;

class ToolsCreativeWordSelectGetParams extends RequestParams
{

    /**
     * @var int $advertiser_id 广告主ID
     */
    public int $advertiser_id;
    
    /**
     * @var array<int> $creative_word_ids 创意词包id列表，如不填默认返回所有创意词包
     */
    public array $creative_word_ids;
    
}