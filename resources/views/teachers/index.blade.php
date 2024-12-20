@extends('layout.master')
@section('title', 'Teachers')
@section('content')
    <div class="d-flex justify-content-between flex-row mb-3">
        <h2 class="mb-0">Teacher's Data</h2>
        <a href="{{ url('/teachers/create') }}" type="button" class="btn btn-primary">Create Teacher</a>
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
                    @foreach ($teachers as $teacher)
                        <tr>
                            <td>{{ $teacher->name }}</td>
                            <td>{{ $teacher->address }}</td>
                            <td>{{ $teacher->birthdate }}</td>
                            <td>
                                <a href="{{ url("/teachers/{$teacher->id}") }}" type="button"
                                    class="btn btn-sm btn-primary">Show</a>
                                <a href="{{ url("/teachers/{$teacher->id}/edit") }}" type="button"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ url("/teachers/{$teacher->id}") }}" method="POST">
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
