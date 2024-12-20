@extends('layout.master')
@section('title', $teachers->name)
@section('content')
    <h2>Teacher Detail</h2>

    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/teachers') }}">Teachers</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail</li>
        </ol>
    </nav>

    <div class="card">
        <div class="card-body">
            <dl class="row">
                <dt class="col-sm-3">Name</dt>
                <dd class="col-sm-9">{{ $teachers->name }}</dd>
                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9">{{ $teachers->address }}</dd>
                <dt class="col-sm-3">Birthdate</dt>
                <dd class="col-sm-9">{{ $teachers->birthdate }}</dd>
                <dt class="col-sm-3">Created at</dt>
                <dd class="col-sm-9">{{ $teachers->created_at }}</dd>
                <dt class="col-sm-3">Last Updated</dt>
                <dd class="col-sm-9">{{ $teachers->updated_at }}</dd>
            </dl>
        </div>
    </div>
@endsection
