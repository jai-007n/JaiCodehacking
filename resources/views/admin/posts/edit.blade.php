@extends('layouts.admin')


@section('content')

    <h1>Edit Post</h1>

    <div class="rows">

        <div class="col-sm-3">

            <img src="{{$posts->photo ? $posts->photo->file :'/images/question.jpg'}}" alt="" height="160" width="220" >

        </div>
        <div class="col-sm-9">
        {!! Form::model($posts,['method'=>'PATCH','action'=>['AdminPostController@update',$posts->id],'files'=>true]) !!}
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
        <div >{!! Form::submit('Update Post',['class'=>'btn btn-primary col-sm-5']) !!}
            {!! Form::close() !!}
        </div>
        <div class="col-sm-2"></div>
        <div >
            {!! Form::open(['method'=>'DELETE','action'=>['AdminPostController@destroy',$posts->id]]) !!}

            {!! Form::submit('Delete Post',['class'=>'btn btn-danger col-sm-5']) !!}

            {!! Form::close() !!}
        </div>
    </div>
    </div>
    <br>
    <div class="rows">
        @include('includes.User_form_error')
    </div>
@endsection
