<?php

declare(strict_types=1);

namespace AdOceanSdk\Tools\Data;

use AdOceanSdk\Kernel\Data\Data;

// 当前 Root EBP 下视频活跃标签，含自定义标签和系统标签
class EbpMaterialListGetResponseDataVideosTagsData extends Data
{

    /**
     * @var int $tag_id 标签ID
     */
    public int $tag_id;

    /**
     * @var string $tag_name 标签名称
     */
    public string $tag_name;

    /**
     * @var string $category_l1name 一级分类名，暂无则返回空字符串
     */
    public string $category_l1name;

    /**
     * @var string $category_l2name 二级分类名，暂无则返回空字符串
     */
    public string $category_l2name;

    /**
     * @var bool $is_system true=系统标签，false=自定义标签
     */
    public bool $is_system;

    /**
     * @var int $rel_material_count 关联素材数，列表素材维度默认返回 0
     */
    public int $rel_material_count;

}