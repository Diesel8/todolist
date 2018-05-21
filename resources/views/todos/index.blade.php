@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="card mt-3">
            <div class="card-header">
                <h3><a href="todo/{{$todo->id}}">{{$todo->text}} <span class="badge badge-pill badge-danger">{{$todo->due}}</span></a></h3>
            </div>
        </div>
    @endforeach
@endif
@endsection