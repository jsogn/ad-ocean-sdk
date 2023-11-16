<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserPublicInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<\AdOceanSdk\Advertiser\Data\AdvertiserPublicInfoGetResponseData> $data 广告主列表
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\Advertiser\Data\AdvertiserPublicInfoGetResponseData::class)]
    public array $data;
    
    /**
     * @return array<\AdOceanSdk\Advertiser\Data\AdvertiserPublicInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}