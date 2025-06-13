<?php

namespace App\Services;

use App\Models\Student;
use App\DataTransferObjects\StudentData;

class StudentService
{
    public function create(StudentData $data): Student
    {
        return Student::create([
            'name' => $data->name,
            'email' => $data->email,
        ]);
    }
}
