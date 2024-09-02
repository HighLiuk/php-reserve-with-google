<?php

namespace HighLiuk\Rwg\Models;

class ServiceInfo
{
    public readonly string $description;

    public function __construct(
        public readonly string $name,
        public readonly string $category,
        string $description,
    ) {
        $this->description = substr($description, 0, 2_000);
    }
}
