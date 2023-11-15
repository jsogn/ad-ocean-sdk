<?php

namespace AdOceanSdk\Account\Advertiser\Response;

use AdOceanSdk\Kernel\Trait\ResponseTrait;
use ClassTransformer\Attributes\ConvertArray;
use AdOceanSdk\Account\Advertiser\Data\AdvertiserInfoGetData;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;

class AdvertiserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;

    #[ConvertArray(AdvertiserInfoGetData::class)]
    public array $data;

    /**
     * @return array<AdvertiserInfoGetData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}