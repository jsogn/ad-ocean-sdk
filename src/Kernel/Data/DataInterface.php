<?php

namespace AdOceanSdk\Kernel\Data;

interface DataInterface
{
    public static function from(array $data): static;

    public static function collection(array $data): array;

    public function toArray(): array;

    public function toJson(): string;
}