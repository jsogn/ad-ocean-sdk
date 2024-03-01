<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ReportCreativeGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var json $data json返回值
     */
    public json $data;
    
    public function getData(): \AdOceanSdk\Report\Data\ReportCreativeGetResponseData
    {
        return $this->data;
    }
}