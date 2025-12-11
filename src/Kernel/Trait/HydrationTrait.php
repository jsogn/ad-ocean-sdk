<?php

namespace AdOceanSdk\Kernel\Trait;

use ReflectionClass;
use ReflectionProperty;

/**
 * 水合(Hydration) Trait
 * 处理数据填充逻辑
 */
trait HydrationTrait
{
    /**
     * 缓存反射属性信息，避免重复创建反射对象
     * @var array<string, array<string, ReflectionProperty>>
     */
    private static array $propertyCache = [];

    /**
     * 获取类的属性缓存
     * @return array<string, ReflectionProperty>
     */
    private function getPropertyCache(): array
    {
        $className = static::class;

        if (!isset(self::$propertyCache[$className])) {
            $reflection = new ReflectionClass($this);
            $properties = [];

            foreach ($reflection->getProperties() as $property) {
                if ($property->getName() === '_dynamicProperties') {
                    continue;
                }
                $property->setAccessible(true);
                $properties[$property->getName()] = $property;
            }

            self::$propertyCache[$className] = $properties;
        }

        return self::$propertyCache[$className];
    }

    /**
     * 水合前钩子
     * 子类可以重写此方法进行预处理
     */
    protected function beforeHydrate(array &$data): void
    {
        // 子类可以重写
    }

    /**
     * 水合后钩子
     * 子类可以重写此方法进行后处理
     */
    protected function afterHydrate(): void
    {
        // 子类可以重写
    }

    /**
     * 将数组数据填充到对象属性中
     */
    protected function hydrate(array $data): void
    {
        // 调用前置钩子
        $this->beforeHydrate($data);

        $properties = $this->getPropertyCache();

        foreach ($data as $key => $value) {
            // 检查属性是否在类中定义
            if (isset($properties[$key])) {
                $property = $properties[$key];

                try {
                    // 获取属性类型并转换值
                    $convertedValue = $this->convertValue($value, $property);
                    $property->setValue($this, $convertedValue);
                } catch (\Throwable $e) {
                    // 转换失败时记录错误，但继续处理其他属性
                    if (method_exists($this, 'handleConversionError')) {
                        $this->handleConversionError($key, $value, $e);
                    }
                    // 可以选择跳过或使用原始值
                    $property->setValue($this, $value);
                }
            } else {
                // 存储到动态属性中
                if (method_exists($this, 'setDynamicProperty')) {
                    $this->setDynamicProperty($key, $value);
                }
            }
        }

        // 调用后置钩子
        $this->afterHydrate();
    }

    /**
     * 处理转换错误（可选）
     * 子类可以重写此方法记录错误
     */
    protected function handleConversionError(string $key, mixed $value, \Throwable $e): void
    {
        // 默认静默处理，子类可以重写记录日志
    }
}
