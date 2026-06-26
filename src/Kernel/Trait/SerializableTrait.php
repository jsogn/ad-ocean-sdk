<?php

namespace AdOceanSdk\Kernel\Trait;

use AdOceanSdk\Kernel\Data\Data;

/**
 * 序列化 Trait
 * 提供对象到数组/JSON的转换能力
 */
trait SerializableTrait
{
    public function __toString(): string
    {
        return $this->toJson();
    }

    /**
     * 转换为JSON字符串
     * @param int $options JSON编码选项
     * @param int $depth 最大深度
     * @return string
     */
    public function toJson(int $options = JSON_UNESCAPED_UNICODE, int $depth = 512): string
    {
        $json = json_encode($this->toArray(), $options, $depth);

        if ($json === false) {
            throw new \RuntimeException('JSON encoding failed: ' . json_last_error_msg());
        }

        return $json;
    }

    /**
     * 转换为数组
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        static $processing = [];

        $objectHash = spl_object_hash($this);

        // 检测循环引用
        if (isset($processing[$objectHash])) {
            return ['_circular_reference' => get_class($this)];
        }

        $processing[$objectHash] = true;

        try {
            $properties = get_object_vars($this);

            // 排除内部属性
            unset($properties['_dynamicProperties']);

            // 补全未初始化的类型属性：
            // get_object_vars() 只返回已初始化的属性，当 API 响应中未包含某字段时，
            // 对应的 typed property 处于 uninitialized 状态会被静默跳过，
            // 导致 toArray()/toJson() 输出丢失该字段，无法区分"API 返回 null"和"API 没返回该字段"。
            // 这里通过反射检查所有已声明的非静态属性，将未初始化的属性填充为 null。
            $reflection = new \ReflectionClass($this);
            foreach ($reflection->getProperties() as $property) {
                $name = $property->getName();
                if ($name === '_dynamicProperties') {
                    continue;
                }
                if ($property->isStatic()) {
                    continue;
                }
                if (!array_key_exists($name, $properties)) {
                    $property->setAccessible(true);
                    if (!$property->isInitialized($this)) {
                        $properties[$name] = null;
                    }
                }
            }

            // 转换已定义的属性
            $result = $this->convertArrayInternal($properties);

            // 合并动态属性
            if (method_exists($this, 'getDynamicProperties')) {
                foreach ($this->getDynamicProperties() as $key => $value) {
                    $result[$key] = $this->convertArrayInternal($value);
                }
            }

            return $result;
        } finally {
            unset($processing[$objectHash]);
        }
    }

    /**
     * 递归转换数组（内部方法）
     * @param mixed $value
     * @return mixed
     */
    private function convertArrayInternal(mixed $value): mixed
    {
        // 处理Data对象
        if ($value instanceof Data) {
            return $value->toArray();
        }

        // 处理数组
        if (is_array($value)) {
            $temp = [];
            foreach ($value as $key => $val) {
                $temp[$key] = $this->convertArrayInternal($val);
            }
            return $temp;
        }

        return $value;
    }
}
