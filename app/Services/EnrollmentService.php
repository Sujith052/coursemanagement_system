<?php

namespace App\Services;

use App\Models\Enrollment;
use App\DataTransferObjects\EnrollmentData;

class EnrollmentService
{
    public function enroll(EnrollmentData $data): void
    {
        // Optional: prevent duplicate enrollment
        if (!Enrollment::where('student_id', $data->student_id)->where('course_id', $data->course_id)->exists()) {
            Enrollment::create([
                'student_id' => $data->student_id,
                'course_id' => $data->course_id,
                'enrolled_at' => now(),
            ]);
        }
    }
}
