<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\DataTransferObjects\CourseData;
use App\Services\CourseService;

class CourseController extends Controller
{
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function index()
    {
        $courses = Course::with(['category', 'enrollments'])->get();
        return view('admin.enrolled-course-students.view', compact('courses'));
    }

    // Show the create form
    public function create()
    {
        $categories = Category::all();
        return view('admin.course.create', compact('categories'));
    }

    // Store course details
   public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'fee' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
        ]);

        $dto = new CourseData($validated);

        $this->courseService->create($dto);

        return redirect()->route('courses.view')->with('success', 'Course created!');
    }

    public function courseFilter(Request $request)
    {
        $query = Course::with('category', 'enrollments');

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('course_name')) {
            $query->where('name', 'like', '%' . $request->course_name . '%');
        }

        $courses = $query->paginate(10);
        $categories = Category::all();

        return view('admin.filter-categorywise-course.view', compact('courses', 'categories'));
    }

    public function view()
    {
        $courses = Course::with(['category'])->get();
        return view('admin.course.view', compact('courses'));
    }
}
