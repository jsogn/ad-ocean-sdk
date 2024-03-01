<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ReportAdvertiserGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Report\Data\ReportAdvertiserGetResponseData $data json返回值
     */
    public \AdOceanSdk\Report\Data\ReportAdvertiserGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Report\Data\ReportAdvertiserGetResponseData
    {
        return $this->data;
    }
}