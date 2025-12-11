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
     * @var array<string, string|null>
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
                }
                // 匹配 @var ClassName[]
                elseif (preg_match('/@var\s+([^\[\]\s]+)\[\]/', $docComment, $matches)) {
                    $elementType = trim($matches[1]);
                }

                // 解析完整类名（处理相对命名空间）
                if ($elementType !== null) {
                    $elementType = $this->resolveClassName($elementType, $property->getDeclaringClass()->getName());
                }
            }

            self::$docTypeCache[$cacheKey] = $elementType;
        }

        return self::$docTypeCache[$cacheKey];
    }

    /**
     * 解析类名为完全限定名
     *
     * @param string $className PHPDoc中的类名（可能带或不带前导反斜杠）
     * @param string $contextClass 当前类的完全限定名
     * @return string|null 完全限定类名，如果类不存在返回null
     */
    private function resolveClassName(string $className, string $contextClass): ?string
    {
        // 规范化类名：移除前导反斜杠用于统一处理
        $normalizedClassName = ltrim($className, '\\');
        
        // 如果是完全限定名（包含命名空间分隔符）且类存在，直接返回
        if (class_exists($normalizedClassName)) {
            return $normalizedClassName;
        }
        
        // 如果原始类名就带反斜杠，说明已经是完全限定名，但类不存在
        if ($className[0] === '\\') {
            return null;
        }

        // 尝试在当前类的命名空间中查找
        $contextNamespace = substr($contextClass, 0, strrpos($contextClass, '\\'));
        $fullClassName = $contextNamespace . '\\' . $normalizedClassName;

        if (class_exists($fullClassName)) {
            return $fullClassName;
        }

        // 尝试逐级向上查找父命名空间
        $parts = explode('\\', $contextNamespace);
        while (count($parts) > 0) {
            array_pop($parts);
            $parentNamespace = implode('\\', $parts);
            $fullClassName = $parentNamespace . '\\' . $normalizedClassName;

            if (class_exists($fullClassName)) {
                return $fullClassName;
            }
        }

        // 如果都找不到，返回null
        return null;
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
