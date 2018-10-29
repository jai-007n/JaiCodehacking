@extends('layouts.admin')


@section('content')
@include('includes.tinyeditor')
    <h1>Create Post</h1>

<div class="rows">


    {!! Form::open(['method'=>'POST','action'=>'AdminPostController@store','files'=>true]) !!}
    <div>
        {!! Form::label('title','Title :') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <br>
    <div>
        {!! Form::label('category_id','Category :') !!}
        {!! Form::select('category_id',array(''=>'Choose Categories')+$categories,null,['class'=>'form-control']) !!}
    </div>
    <br>
    <div>
        {!! Form::label('photo_id','Photo :') !!}
        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}
    </div>
    <br>
    <div>
        {!! Form::label('body','Description :') !!}
        {!! Form::textarea('body',null,['class'=>'form-control','rows'=>3]) !!}
    </div>
    <br>
    <div>
    {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
    </div>
    </div>
    <br>
    <div class="rows">
    @include('includes.User_form_error')
    </div>
    {!! Form::close() !!}

@endsection
