<?php

declare(strict_types=1);

namespace AdOceanSdk\OcProject\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ProjectRejectReasonGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseData $data json返回值
     */
    public \AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseData $data;

    public function getData(): \AdOceanSdk\OcProject\Data\ProjectRejectReasonGetResponseData
    {
        return $this->data;
    }
}