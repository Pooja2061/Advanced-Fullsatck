<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();

        return view('courses.index', compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'duration' => ['required', 'integer', 'min:1'],
            'fee' => ['required', 'numeric', 'min:0'],
            'difficulty' => ['required', 'in:Easy,Medium,Hard'],
            'is_active' => ['nullable', 'boolean'],
        ]);

        $validated['is_active'] = $request->has('is_active');

        Course::create($validated);

        return redirect('/courses')
            ->with('success', 'Course added successfully.');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $validated = $request->validate([
    'code' => ['required', 'string', 'max:50'],
    'name' => ['required', 'string', 'max:255'],
    'description' => ['nullable', 'string'],
    'duration' => ['required', 'integer', 'min:1'],
    'fee' => ['required', 'numeric', 'min:0'],
    'difficulty' => ['required', 'in:Easy,Medium,Hard'],
    'is_active' => ['nullable', 'boolean'],
]);
        

        $validated['is_active'] = $request->has('is_active');

        $course->update($validated);

        return redirect('/courses')
            ->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        $course->delete();

        return redirect('/courses')
            ->with('success', 'Course deleted successfully.');
    }
}