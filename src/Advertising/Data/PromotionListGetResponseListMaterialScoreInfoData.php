<?php

declare(strict_types=1);

namespace AdOceanSdk\Advertising\Data;

use AdOceanSdk\Kernel\Data\Data;

// 素材评级信息
class PromotionListGetResponseListMaterialScoreInfoData extends Data
{

    /**
     * @var string $score_num_of_material 素材数量评级分数，枚举值：LEVEL1较差、LEVEL2一般、LEVEL3良好、LEVEL4极佳、LEVEL5完美
     */
    public string $score_num_of_material;
    
    /**
     * @var string $score_type_of_material 素材类型评级分数，枚举值：LEVEL1较差、LEVEL2一般、LEVEL3良好、LEVEL4极佳、LEVEL5完美
     */
    public string $score_type_of_material;
    
    /**
     * @var string $score_value_of_material 素材品质评级分数，枚举值：LEVEL1较差、LEVEL2一般、LEVEL3良好、LEVEL4极佳、LEVEL5完美
     */
    public string $score_value_of_material;
    
    /**
     * @var array<string> $material_advice 素材评级建议
     */
    public array $material_advice;
    
    /**
     * @var array<\AdOceanSdk\Advertising\Data\PromotionListGetResponseListMaterialScoreInfoLowQualityMaterialListData> $low_quality_material_list 低质素材信息
     */
    public array $low_quality_material_list;
    
}