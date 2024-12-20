@extends('layout.master')
@section('title', 'Edit Student')
@section('content')
    <h2>Edit Student</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/students') }}">Students</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <form action="{{ url("/students/{$student->id}") }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $student->name }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $student->address }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Birthdate</label>
                    <input type="date" name="birthdate" class="form-control" value="{{ $student->birthdate }}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection