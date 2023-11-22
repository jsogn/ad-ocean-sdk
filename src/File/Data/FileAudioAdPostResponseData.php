<?php

declare(strict_types=1);

namespace AdOceanSdk\File\Data;

use AdOceanSdk\Kernel\Data\Data;

// json返回值
class FileAudioAdPostResponseData extends Data
{

    /**
     * @var \AdOceanSdk\File\Data\FileAudioAdPostResponseAudioInfoData $audio_info 音频信息
     */
    public \AdOceanSdk\File\Data\FileAudioAdPostResponseAudioInfoData $audio_info;
    
}