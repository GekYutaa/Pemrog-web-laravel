@extends('layout.master')
@section('title', 'Students')
@section('content')
    <div class="d-flex justify-content-between flex-row mb-3">
        <h2 class="mb-0">Student's Data</h2>
        <a href="{{ url('/students/create') }}" type="button" class="btn btn-primary">Create Student</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
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
                            <td>
                                <a href="{{ url("/students/{$student->id}") }}" type="button"
                                    class="btn btn-sm btn-primary">Show</a>
                                <a href="{{ url("/students/{$student->id}/edit") }}" type="button"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url("/students/{$student->id}") }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
