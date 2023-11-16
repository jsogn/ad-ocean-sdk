<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Advertiser\Data\AdvertiserInfoGetResponseData;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use ClassTransformer\Attributes\ConvertArray;

class AdvertiserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<AdvertiserInfoGetResponseData> $data json返回值
     */
    #[ConvertArray(AdvertiserInfoGetResponseData::class)]
    public array $data;


    /**
     * @return array<AdvertiserInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}