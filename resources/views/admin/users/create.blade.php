@extends('layouts.admin')


@section('content')

    <h1>Create User page</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store','files'=>true]) !!}
    <div>
        {!! Form::label('name','Name :') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div>
    {!! Form::label('email','Email :') !!}
    {!! Form::email('email',null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('role_id','Role :') !!}
        {!! Form::select('role_id',[''=>'Choose Options']+$roles,null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('is_active','Status :') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),0,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('file','Title :') !!}
        {!! Form::file('file',null,['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Create Post',['class'=>'btn btn-danger']) !!}

@include('includes.User_form_error')

    {!! Form::close() !!}

@endsection

