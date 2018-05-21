@extends('layouts.app')

@section('content')
    <h1>Create ToDo</h1>
    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsTextArea('due') }}
        {{ Form::bsSubmit('submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}
@endsection