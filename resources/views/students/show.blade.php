@extends('layout.master')
@section('title', $student->name)
@section('content')
    <h2>Student Detail</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/students') }}">Students</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $student->name }}</dd>
                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">{{ $student->address }}</dd>
                <dt class="col-sm-3">Birthdate</dt>
                <dd class="col-sm-9">{{ $student->birthdate }}</dd>
                <dt class="col-sm-3">Created at</dt>
                <dd class="col-sm-9">{{ $student->created_at }}</dd>
                <dt class="col-sm-3">Last Updated</dt>
                <dd class="col-sm-9">{{ $student->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection
