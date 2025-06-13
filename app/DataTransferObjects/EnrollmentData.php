<?php

namespace App\DataTransferObjects;

class EnrollmentData
{
    public int $student_id;
    public int $course_id;

    public function __construct(array $data)
    {
        $this->student_id = $data['student_id'];
        $this->course_id = $data['course_id'];
    }
}
