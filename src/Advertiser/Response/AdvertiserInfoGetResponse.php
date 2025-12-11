<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertiser\Response;

use AdOceanSdk\Advertiser\Data\AdvertiserInfoGetResponseData;
use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AdvertiserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var array<AdvertiserInfoGetResponseData> $data json返回值
     */
    public array $data;


    /**
     * @return array<AdvertiserInfoGetResponseData>
     */
    public function getData(): array
    {
        return $this->data;
    }
}