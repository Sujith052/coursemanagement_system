<?php

namespace App\Services;

use App\Models\Category;
use App\DataTransferObjects\CategoryData;

class CategoryService
{
    public function create(CategoryData $data): Category
    {
        return Category::create([
            'name' => $data->name,
        ]);
    }
}
