<?php

namespace AdOceanSdk\Kernel\Data;

use AdOceanSdk\Kernel\Trait\DynamicPropertiesTrait;
use AdOceanSdk\Kernel\Trait\HydrationTrait;
use AdOceanSdk\Kernel\Trait\SerializableTrait;
use AdOceanSdk\Kernel\Trait\TypeConversionTrait;

/**
 * Data 基类
 *
 * 提供数据对象的核心功能：
 * - 数组到对象的自动映射
 * - 类型自动转换
 * - 动态属性支持
 * - 序列化能力
 *
 * @package AdOceanSdk\Kernel\Data
 */
abstract class Data implements DataInterface
{
    use DynamicPropertiesTrait;
    use HydrationTrait;
    use TypeConversionTrait;
    use SerializableTrait;

    /**
     * 创建空实例
     */
    public static function make(): static
    {
        return static::from([]);
    }

    /**
     * 从数组创建实例
     * @param array<string, mixed> $data
     */
    public static function from(array $data): static
    {
        $instance = new static();
        $instance->hydrate($data);
        return $instance;
    }

    /**
     * 批量创建实例集合
     * @param array<array<string, mixed>> $data
     * @return array<static>
     */
    public static function collection(array $data): array
    {
        $result = [];
        foreach ($data as $item) {
            $result[] = static::from($item);
        }
        return $result;
    }
}