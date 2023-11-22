<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class BusinessPlatformCompanyAccountGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyAccountGetResponseData $data json返回值
     */
    public \AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyAccountGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Majordomo\Data\BusinessPlatformCompanyAccountGetResponseData
    {
        return $this->data;
    }
}