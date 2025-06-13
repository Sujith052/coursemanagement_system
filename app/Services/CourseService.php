<?php

namespace App\Services;

use App\Models\Course;
use App\DataTransferObjects\CourseData;

class CourseService
{
    public function create(CourseData $data): Course
    {
        return Course::create([
            'name' => $data->name,
            'fee' => $data->fee,
            'category_id' => $data->category_id,
        ]);
    }
}
