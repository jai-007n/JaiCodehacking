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
<br>

        <div class="col-sm-3">{!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
        <div class="col-sm-3">
        {!! Form::open(['method'=>'DELETE','action'=>['AdminUsersController@destroy',$user->id]]) !!}

          {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}
        </div>

    @include('includes.User_form_error')


    </div>

@endsection

