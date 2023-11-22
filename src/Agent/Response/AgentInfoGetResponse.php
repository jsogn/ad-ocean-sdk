<?php

declare(strict_types=1);

namespace AdOceanSdk\Agent\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;

class AgentInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var \AdOceanSdk\Agent\Data\AgentInfoGetResponseData $data json返回值
     */
    public \AdOceanSdk\Agent\Data\AgentInfoGetResponseData $data;
    
    public function getData(): \AdOceanSdk\Agent\Data\AgentInfoGetResponseData
    {
        return $this->data;
    }
}