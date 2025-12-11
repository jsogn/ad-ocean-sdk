<?php

namespace AdOceanSdk\Kernel\Trait;

/**
 * 动态属性管理 Trait
 * 提供未定义属性的动态访问能力
 */
trait DynamicPropertiesTrait
{
    /**
     * 存储未定义的动态属性
     */
    private array $_dynamicProperties = [];

    /**
     * 魔术方法: 获取属性
     */
    public function __get(string $name): mixed
    {
        return $this->_dynamicProperties[$name] ?? null;
    }

    /**
     * 魔术方法: 设置属性
     */
    public function __set(string $name, mixed $value): void
    {
        $this->_dynamicProperties[$name] = $value;
    }

    /**
     * 魔术方法: 检查属性是否存在
     */
    public function __isset(string $name): bool
    {
        return isset($this->_dynamicProperties[$name]);
    }

    /**
     * 魔术方法: 删除属性
     */
    public function __unset(string $name): void
    {
        unset($this->_dynamicProperties[$name]);
    }

    /**
     * 获取所有动态属性
     * @return array<string, mixed>
     */
    protected function getDynamicProperties(): array
    {
        return $this->_dynamicProperties;
    }

    /**
     * 设置动态属性值
     */
    protected function setDynamicProperty(string $key, mixed $value): void
    {
        $this->_dynamicProperties[$key] = $value;
    }
}
