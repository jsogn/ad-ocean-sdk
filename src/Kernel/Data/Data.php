<?php

namespace AdOceanSdk\Kernel\Data;

use ClassTransformer\Hydrator;
use ClassTransformer\HydratorConfig;

abstract class Data implements DataInterface
{
    public static function make(): static
    {
        return static::from([]);
    }

    public static function from(array $data): static
    {
        return Hydrator::init(new HydratorConfig(false))
            ->create(static::class, $data);
    }

    public static function collection(array $data): array
    {
        return Hydrator::init(new HydratorConfig(false))
            ->createCollection(static::class, $data);
    }

    private static function snakeToCamelCase(string $input): string
    {
        return lcfirst(str_replace('_', '', ucwords($input, '_')));
    }

    private static function camelToSnakeCase(string $input): string
    {
        return strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $input));
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    public function toArray(): array
    {
        $properties = get_object_vars($this);

        return $this->convertArray($properties);
    }

    private function convertArray(mixed $value)
    {
        if ($value instanceof Data) {
            return $value->toArray();
        } else if (is_array($value)) {
            $temp = [];
            foreach ($value as $key => $val) {
                $temp[$key] = $this->convertArray($val);
            }
            return $temp;
        }
        return $value;
    }

}