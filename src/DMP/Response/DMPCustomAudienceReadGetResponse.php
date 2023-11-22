<?php

declare(strict_types=1);

namespace AdOceanSdk\DMP\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DMPCustomAudienceReadGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DMP\Data\DMPCustomAudienceReadGetResponseData $data 返回数据
     */
    public \AdOceanSdk\DMP\Data\DMPCustomAudienceReadGetResponseData $data;
    
    public function getData(): \AdOceanSdk\DMP\Data\DMPCustomAudienceReadGetResponseData
    {
        return $this->data;
    }
}