@extends('chenka-crud::layouts.master')

@section('title')
    ChenkaCrud | Login
@stop

@section('body')
<div class="container" id="login-form-wrap">
    {{ Form::open(['route' => 'admin.sessions.store', 'class' => 'form-signin', 'role' => 'form']) }}
        @include('chenka-crud::sessions.partials._form-login')
    {{ Form::close() }}
</div>
@stop
