@extends('chenka-crud::layout.master')

@section('title')
    ChenkaCrud | Login
@stop

@section('body')
<div class="container">
    {{ Form::open(['route' => 'admin.sessions.store', 'class' => 'form-signin', 'role' => 'form']) }}
        @include('chenka-crud::sessions.partials._form-login')
    {{ Form::close() }}
</div>
@stop
