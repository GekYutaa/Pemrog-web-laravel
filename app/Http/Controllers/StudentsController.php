<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('created_at', 'desc')
            ->get();
        return view('students.index', ['students' => $students]);
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = Student::create([
            'name' => $request->name,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
        ]);

        return redirect('/students')
            ->with('created', "Student {$request->name} successfully created!");
    }

    public function show(Student $student)
    {
        return view('students.show', ['student' => $student]);
    }
}
