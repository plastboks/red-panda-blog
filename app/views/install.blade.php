@extends('base')
@section('title')
Install
@endsection
@section('content')
    <h1> Add a new user</h1>
    {{ Form::open(array('url'=>'install/createuser')) }}
        {{ Form::token() }}
        <!-- title field -->
        <p>{{ Form::label('username', 'Username') }}</p>
        {{ $errors->first('username', '<p class="error">:message</p>') }}
        <p>{{ Form::text('username', $username) }}</p>
        <!-- body field -->
        <p>{{ Form::label('email', 'Email') }}</p>
        {{ $errors->first('email', '<p class="error">:message</p>') }}
        <p>{{ Form::text('email', $email) }}</p>
        <!-- body field -->
        <p>{{ Form::label('givenname', 'Givenname') }}</p>
        {{ $errors->first('givenname', '<p class="error">:message</p>') }}
        <p>{{ Form::text('givenname', $givenname) }}</p>
        <!-- body field -->
        <p>{{ Form::label('surname', 'Surname') }}</p>
        {{ $errors->first('surname', '<p class="error">:message</p>') }}
        <p>{{ Form::text('surname', $surname) }}</p>
        <!-- password field -->
        <p>{{ Form::label('password', 'Password') }}</p>
        {{ $errors->first('password', '<p class="error">:message</p>') }}
        <p>{{ Form::password('password') }}</p>
        <p>{{ Form::label('password_confirmation', 'Password again') }}</p>
        <p>{{ Form::password('password_confirmation') }}</p>
        <!-- submit button -->
        <p>{{ Form::submit('Create') }}</p>
    {{ Form::close() }}
@endsection
