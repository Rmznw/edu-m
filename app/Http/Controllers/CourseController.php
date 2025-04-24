<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CourseController extends Controller
{


    public function index()
    {
        $course = Course::all();
        return view('courses.index', ['courses' => $course]);

    }


    public function create(): View
    {

        return view('courses.create');

    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'duration' => 'required|integer|min:1|max:120'
        ]);

        Course::create([
            'duration' => $validated['duration'],
        ]);

        $input = $request->all();
        Course::create($input);
        return redirect()->route('courses.index')->with('success', 'Course Added');
    }


    public function show(string $id): View
    {
        $course = Course::find($id);
        return view('courses.show')->with('courses', $course);
    }

    public function edit(string $id): View
    {
        $course = Course::find($id);
        return view('courses.edit')->with('course', $course);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect()->with('success', 'Course updated!');
    }


    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted');
    }
}
