<?php

declare(strict_types=1);

namespace AdOceanSdk\Fund\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class AgentTransferTransactionRecordGetResponseData extends Data
{

    /**
     * @var array<\AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetResponseRecordsData> $records 转账记录
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Fund\Data\AgentTransferTransactionRecordGetResponseRecordsData::class)]
    public array $records;
    
    /**
     * @var \AdOceanSdk\ResponsePageInfoData $page_info 分页信息
     */
    public \AdOceanSdk\ResponsePageInfoData $page_info;
    
}