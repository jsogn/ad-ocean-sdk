<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class CreativeTemplateTagsGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Advertising\Data\CreativeTemplateTagsGetResponseData $data 返回数据
     */
    public \AdOceanSdk\Advertising\Data\CreativeTemplateTagsGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Advertising\Data\CreativeTemplateTagsGetResponseData
    {
        return $this->data;
    }
}