<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CustomAudienceSelectGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DMP\Data\CustomAudienceSelectGetResponseData $data 返回数据信息
     */
    public \AdOceanSdk\DMP\Data\CustomAudienceSelectGetResponseData $data;
    
    public function getData(): \AdOceanSdk\DMP\Data\CustomAudienceSelectGetResponseData
    {
        return $this->data;
    }
}