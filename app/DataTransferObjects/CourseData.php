<?php

namespace App\DataTransferObjects;

class CourseData
{
    public string $name;
    public float $fee;
    public int $category_id;

    public function __construct(array $data)
    {
        $this->name = $data['name'];
        $this->fee = $data['fee'];
        $this->category_id = $data['category_id'];
    }
}
