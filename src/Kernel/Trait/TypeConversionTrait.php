<?php

namespace AdOceanSdk\Kernel\Trait;

use AdOceanSdk\Kernel\Data\Data;
use ReflectionNamedType;
use ReflectionProperty;

/**
 * 类型转换 Trait
 * 处理数据类型的转换逻辑
 */
trait TypeConversionTrait
{
    /**
     * 缓存 PHPDoc 解析结果
     * @var array<string, array<string, string|null>>
     */
    private static array $docTypeCache = [];

    /**
     * 根据属性类型转换值
     */
    protected function convertValue(mixed $value, ReflectionProperty $property): mixed
    {
        // null直接返回null
        if ($value === null) {
            return null;
        }

        $type = $property->getType();

        if (!$type instanceof ReflectionNamedType) {
            return $value;
        }

        $typeName = $type->getName();

        // 处理数组类型
        if ($typeName === 'array') {
            return $this->convertArrayType($value, $property);
        }

        // 处理Data子类
        if (class_exists($typeName) && is_subclass_of($typeName, Data::class)) {
            return $this->convertDataType($value, $typeName);
        }

        // 处理基本类型
        if (in_array($typeName, ['int', 'float', 'string', 'bool'])) {
            return $this->convertPrimitiveType($value, $typeName);
        }

        // 其他类型直接返回
        return $value;
    }

    /**
     * 转换数组类型
     */
    private function convertArrayType(mixed $value, ReflectionProperty $property): mixed
    {
        if (!is_array($value)) {
            return $value;
        }

        $elementType = $this->getArrayElementType($property);
        
        if ($elementType === null) {
            return $value;
        }

        // 如果是Data类型的数组，递归转换
        if (class_exists($elementType) && is_subclass_of($elementType, Data::class)) {
            return array_map(
                fn($item) => is_array($item) ? $elementType::from($item) : $item,
                $value
            );
        }

        return $value;
    }

    /**
     * 获取数组元素类型（从PHPDoc缓存）
     */
    private function getArrayElementType(ReflectionProperty $property): ?string
    {
        $cacheKey = $property->getDeclaringClass()->getName() . '::' . $property->getName();

        if (!isset(self::$docTypeCache[$cacheKey])) {
            $docComment = $property->getDocComment();
            $elementType = null;

            if ($docComment) {
                // 匹配 @var array<ClassName>
                if (preg_match('/@var\s+array<([^,>]+)>/', $docComment, $matches)) {
                    $elementType = trim($matches[1]);
                    $elementType = ltrim($elementType, '\\');
                }
                // 匹配 @var ClassName[]
                elseif (preg_match('/@var\s+\\\\?([^\[\]]+)\[\]/', $docComment, $matches)) {
                    $elementType = trim($matches[1]);
                    $elementType = ltrim($elementType, '\\');
                }
            }

            self::$docTypeCache[$cacheKey] = $elementType;
        }

        return self::$docTypeCache[$cacheKey];
    }

    /**
     * 转换Data类型
     */
    private function convertDataType(mixed $value, string $className): mixed
    {
        return is_array($value) ? $className::from($value) : $value;
    }

    /**
     * 转换基本类型
     */
    private function convertPrimitiveType(mixed $value, string $typeName): mixed
    {
        return match ($typeName) {
            'int' => (int) $value,
            'float' => (float) $value,
            'string' => (string) $value,
            'bool' => (bool) $value,
            default => $value,
        };
    }
}
