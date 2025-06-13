<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Services\EnrollmentService;
use App\DataTransferObjects\EnrollmentData;

class EnrollmentController extends Controller
{
    protected EnrollmentService $enrollmentService;

    public function __construct(EnrollmentService $enrollmentService)
    {
        $this->enrollmentService = $enrollmentService;
    }

    /**
     * Show the course enrollment form.
     */
    public function create()
    {
        $students = Student::all();
        $courses = Course::all();

        return view('admin.enrollment.create', compact('students', 'courses'));
    }

    /**
     * Store the course enrollment.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'student_id' => 'required|exists:students,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $dto = new EnrollmentData($validated);

        $this->enrollmentService->enroll($dto);

        return redirect()->route('enrollments.create')->with('success', 'Student enrolled successfully!');
    }

    public function showByCourse(Request $request)
    {
        $courses = Course::all();
        $students = null;

        if ($request->has('course_id') && $request->course_id) {
            $course = Course::with('students')->find($request->course_id);
            $students = $course ? $course->students : null;
        }

        return view('admin.specific-course-students.view', compact('courses', 'students'));
    }
}
