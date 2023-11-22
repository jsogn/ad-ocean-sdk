<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// 音频信息
class FileAudioAdPostResponseAudioInfoData extends Data
{

    /**
     * @var string $audio_id 音频id，可使用该id去「上传图文」接口创建图文素材（图文素材为白名单功能，如需使用请联系销售或运营同学）
     */
    public string $audio_id;
    
    /**
     * @var int $material_id 素材id
     */
    public int $material_id;
    
    /**
     * @var string $audio_signature 音频素材md5值
     */
    public string $audio_signature;
    
    /**
     * @var string $audio_url 音频url地址
     */
    public string $audio_url;
    
}