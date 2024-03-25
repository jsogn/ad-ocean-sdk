<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DPAProductDetailGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DPAProductDetailGetGetResponseData $data 返回数据
     */
    public \AdOceanSdk\DPA\Data\DPAProductDetailGetGetResponseData $data;
    
    public function getData(): \AdOceanSdk\DPA\Data\DPAProductDetailGetGetResponseData
    {
        return $this->data;
    }
}