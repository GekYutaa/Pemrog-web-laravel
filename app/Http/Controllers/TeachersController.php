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
        $teachers = Teacher::create([
            'name' => $request->name,
            'address' => $request->address,
            'birthdate' => $request->birthdate,
        ]);

        return redirect('/teachers')
            ->with('created', "Teacher {$request->name} successfully created!");
    }

    public function show(Teacher $teachers)
    {
        return view('teachers.show', ['teachers' => $teachers]);
    }
}
