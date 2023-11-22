<?php

declare(strict_types=1);

namespace AdOceanSdk\Majordomo\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class BusinessPlatformPartnerOrganizationListGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Majordomo\Data\BusinessPlatformPartnerOrganizationListGetResponseData
    {
        return $this->data;
    }
}