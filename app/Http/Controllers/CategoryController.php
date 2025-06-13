<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CategoryService;
use App\DataTransferObjects\CategoryData;
use App\Models\Category;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.categories.view', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    // Store category details
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $dto = new CategoryData($validated);

        $this->categoryService->create($dto);

        return redirect()->route('categories.view')->with('success', 'Category created!');
    }
}
