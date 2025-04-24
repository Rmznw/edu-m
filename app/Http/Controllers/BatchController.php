<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BatchController extends Controller
{
    public function index()
    {
        $batch = Batch::all();
        return view('batches.index', ['batches' => $batch]);

    }


    public function create(): View
    {
        $courses = Course::pluck('name', 'id');
        return view('batches.create', compact('courses'));

    }


    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Batch::create($input);
        return redirect()->route('batches.index')->with('success', 'Batch Added');
    }


    public function show(string $id): View
    {
        $batch = Batch::find($id);
        return view('batches.show')->with('batches', $batch);
    }

    public function edit(string $id): View
    {
        $batch = Batch::find($id);
        return view('batches.edit')->with('batches', $batch);
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        $batch = Batch::find($id);
        $input = $request->all();
        $batch->update($input);
        return redirect()->with('success', 'Batch updated!');
    }


    public function destroy(Batch $batch)
    {
        $batch->delete();
        return redirect()->route('batches.index')->with('success', 'Batch deleted');
    }


}
