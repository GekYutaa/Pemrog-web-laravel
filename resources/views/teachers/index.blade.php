@extends('layout.master')
@section('title', 'Teachers')
@section('content')
    <div class="d-flex justify-content-between flex-row mb-3">
        <h2 class="mb-0">Teacher's Data</h2>
        <a href="{{ url('/teachers/create') }}" type="button" class="btn btn-primary">Create Teacher</a>
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
                    @foreach ($teachers as $teachers)
                        <tr>
                            <td>{{ $teachers->name }}</td>
                            <td>{{ $teachers->address }}</td>
                            <td>{{ $teachers->birthdate }}</td>
                            <td><a href="{{ url("/teachers/{$teachers->id}") }}" type="button"
                                    class="btn btn-sm btn-primary">Show</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
