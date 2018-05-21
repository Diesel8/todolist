@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary mb-2">Go Back</a>
    <div class="card">
        <div class="card-header">
                <h1>{{$todo->text}}</h1>
                <div class="badge badge-pill badge-danger">{{$todo->due}}</div>
        </div>
        <div class="card-body">
            <p>{{$todo->body}}</p>
        </div>
    </div>

@endsection