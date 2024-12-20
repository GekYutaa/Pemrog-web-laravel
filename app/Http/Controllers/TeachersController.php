<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('created_at', 'desc')
            ->get();
        return view('teachers.index', ['teachers' => $teachers]);
    }

    public function create()
    {
        return view('teachers.create');
    }

    public function store(Request $request)
    {
        $teacher = Teacher::create([
            'name' => $request->name,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
        ]);

        return redirect('/teachers')
            ->with('status', "Teacher {$request->name} successfully created!");
    }

    public function show(Teacher $teacher)
    {
        return view('teachers.show', ['teachers' => $teacher]);
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit', ['teacher' => $teacher]);
    }

    public function update(Request $request, Teacher $teacher)
    {
        $teacher->update([
            'name' => $request->name,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
        ]);

        return redirect('/teachers')
            ->with('status', "Teacher {$teacher->name} successfully updated!");
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();

        return redirect('/teachers')
            ->with('status', "Teacher {$teacher->name} successfully deleted!");
    }
}
