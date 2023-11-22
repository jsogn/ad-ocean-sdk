<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ReportCustomGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Report\Data\ReportCustomGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Report\Data\ReportCustomGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Report\Data\ReportCustomGetResponseData
    {
        return $this->data;
    }
}