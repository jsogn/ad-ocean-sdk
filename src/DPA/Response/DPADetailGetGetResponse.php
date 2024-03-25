<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DPADetailGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DPADetailGetGetResponseData $data 返回数据
     */
    public \AdOceanSdk\DPA\Data\DPADetailGetGetResponseData $data;
    
    public function getData(): \AdOceanSdk\DPA\Data\DPADetailGetGetResponseData
    {
        return $this->data;
    }
}