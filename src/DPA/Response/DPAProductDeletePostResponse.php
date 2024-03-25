<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class DPAProductDeletePostResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var object $data 返回数据
     */
    public object $data;
    
    public function getData(): \AdOceanSdk\DPA\Data\DPAProductDeletePostResponseData
    {
        return $this->data;
    }
}