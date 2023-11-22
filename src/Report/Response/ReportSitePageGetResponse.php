<?php

declare(strict_types=1);

namespace AdOceanSdk\Report\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ReportSitePageGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Report\Data\ReportSitePageGetResponseData $data 返回值
     */
    public \AdOceanSdk\Report\Data\ReportSitePageGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Report\Data\ReportSitePageGetResponseData
    {
        return $this->data;
    }
}