@extends('layouts.admin')


@section('content')

    <h1>Edit User page</h1>
    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->file :'/images/question.jpg'}}" alt="" height="160" width="220" >

    </div>
    <div class="col-sm-9">

    {!! Form::model($user,['method'=>'PATCH','action'=>['AdminUsersController@update',$user->id],'files'=>true]) !!}
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
        {!! Form::select('role_id',$roles,null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('is_active','Status :') !!}
        {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('photo_id','Title :') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>

    <div>
        {!! Form::label('password','Password :') !!}
        {!! Form::password('password',['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Create Post',['class'=>'btn btn-danger']) !!}

    @include('includes.User_form_error')

    {!! Form::close() !!}
    </div>

@endsection

