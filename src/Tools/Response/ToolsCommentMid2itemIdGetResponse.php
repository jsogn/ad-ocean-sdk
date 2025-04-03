<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class ToolsCommentMid2itemIdGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Tools\Data\ToolsCommentMid2itemIdGetResponseData $data json返回值
     */
    public \AdOceanSdk\Tools\Data\ToolsCommentMid2itemIdGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Tools\Data\ToolsCommentMid2itemIdGetResponseData
    {
        return $this->data;
    }
}