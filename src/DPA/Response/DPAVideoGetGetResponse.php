<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DPAVideoGetGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseData $data 返回数据
     */
    public \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseData $data;
    
    public function getData(): \AdOceanSdk\DPA\Data\DPAVideoGetGetResponseData
    {
        return $this->data;
    }
}