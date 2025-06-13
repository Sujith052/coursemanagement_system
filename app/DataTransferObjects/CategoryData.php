<?php

namespace App\DataTransferObjects;

class CategoryData
{
    public string $name;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
    }
}
