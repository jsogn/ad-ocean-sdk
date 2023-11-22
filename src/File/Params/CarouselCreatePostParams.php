<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Params;

use AdOceanSdk\RequestParams;

class CarouselCreatePostParams extends RequestParams
{

    /**
     * @var int $advertiser_id  广告主id
     */
    public int $advertiser_id;

    /**
     * @var array<\AdOceanSdk\File\Data\CarouselCreatePostParamImagesData> $images  图片信息，包含图片id和图片主题
     */
    #[\ClassTransformer\Attributes\ConvertArray(\AdOceanSdk\File\Data\CarouselCreatePostParamImagesData::class)]
    public array $images;

    /**
     * @var string $video_id 音频id（旧版）（该字段将在12月19日下线，暂不对您的调用产生影响。请及时调整，使用下方audio_id来搭建图文素材）
     */
    public string $video_id;

    /**
     * @var string $audio_id 音频id，根据「上传图文内的音频素材」接口获取
     */
    public string $audio_id;

    /**
     * @var string $file_name 图文标题，可自定义图文素材名
     */
    public string $file_name;

    /**
     * @var string $carousel_type  可选值:
     */
    public string $carousel_type ;

}