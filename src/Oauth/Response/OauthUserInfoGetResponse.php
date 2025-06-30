<?php

declare(strict_types=1);

namespace AdOceanSdk\Oauth\Response;

use AdOceanSdk\Kernel\Data\Data;
use AdOceanSdk\Kernel\Interface\ResponseInterface;
use AdOceanSdk\Kernel\Trait\ResponseTrait;
use AdOceanSdk\Oauth\Data\OauthUserInfoGetResponseData;

class OauthUserInfoGetResponse extends Data implements ResponseInterface
{
    use ResponseTrait;


    /**
     * @var OauthUserInfoGetResponseData $data 返回数据
     */
    public OauthUserInfoGetResponseData $data;


    /**
     * @return OauthUserInfoGetResponseData
     */
    public function getData(): OauthUserInfoGetResponseData
    {
        return $this->data;
    }
}