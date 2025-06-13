<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StudentService;
use App\DataTransferObjects\StudentData;
use App\Models\Student;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct(StudentService $studentService)
    {
        $this->studentService = $studentService;
    }

    public function index()
    {
        $students = Student::orderBy('name')->paginate(10);
        return view('admin.students.view', compact('students'));
    }

    public function create()
    {
        return view('admin.students.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:students,email',
        ]);

        $dto = new StudentData($validated);

        $this->studentService->create($dto);

        return redirect()->route('students.index')->with('success', 'Student created!');
    }
}
