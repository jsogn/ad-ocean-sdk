<?php

declare(strict_types=1);

namespace AdOceanSdk\DPA\Params;

use AdOceanSdk\RequestParams;

class DpaEbpClueProductSavePostParams extends RequestParams
{

    /**
     * @var int $code 返回码,详见 【附录-返回码】
     */
    public int $code;

    /**
     * @var string $message 返回信息,详见 【附录-返回码】
     */
    public string $message;

    /**
     * @var \AdOceanSdk\DPA\Data\DpaEbpClueProductSavePostParamData $data json返回值
     */
    public \AdOceanSdk\DPA\Data\DpaEbpClueProductSavePostParamData $data;

    /**
     * @var string $request_id 请求日志id
     */
    public string $request_id;

}