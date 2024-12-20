@extends('layout.master')
@section('title', 'Students')
@section('content')
    <div class="d-flex justify-content-between flex-row mb-3">
        <h2 class="mb-0">Student's Data</h2>
        <a href="{{ url('/students/create') }}" type="button" class="btn btn-primary">Create Student</a>
    </div>

    @if (session('created'))
        <div class="alert alert-success" role="alert">
            {{ session('created') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Birthdate</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->birthdate }}</td>
                            <td><a href="{{ url("/students/{$student->id}") }}" type="button"
                                    class="btn btn-sm btn-primary">Show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
