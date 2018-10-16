@extends('layouts.admin')

@section('content')

    <div class="rows">
    <div class="col-sm-9">

        {!! Form::model($categories,['method'=>'PATCH','action'=>['AdminCategoriesController@update',$categories->id]]) !!}
        <div>
            {!! Form::label('name','Add New category :') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div><br>

        {!! Form::submit('Update Category',['class'=>'btn btn-primary col-sm-5']) !!}

       <div class="col-sm-1"></div>

        {!! Form::close() !!}
        {!! Form::open(['method'=>'DELETE','action'=>['AdminCategoriesController@destroy',$categories->id]]) !!}

        {!! Form::submit('Delete Category',['class'=>'btn btn-danger col-sm-5']) !!}

        {!! Form::close() !!}

    </div>
    </div>
<div class="rows">
       @include('includes.User_form_error')
</div>
    {{--<div class="col-sm-6">--}}
        {{--<h1>Categories</h1>--}}

        {{--<table class="table table-striped table-bordered table-hover">--}}
            {{--<thead>--}}
            {{--<tr>--}}
                {{--<th>Id</th>--}}
                {{--<th>Name</th>--}}
                {{--<th>Created Date</th>--}}


            {{--</tr>--}}
            {{--</thead>--}}
            {{--<tbody>--}}
            {{--@if($categories)--}}
                {{--@foreach($categories as $category)--}}
                    {{--<tr>--}}
                        {{--<td>{{$category->id}}</td>--}}
                        {{--<td> <img height="70" width="70" src="{{$user->photo ? $user->photo->file :'/images/question.jpg'}}" alt=""></td>--}}
                        {{--<td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>--}}
                        {{--<td>{{$category->name}}</td>--}}

                        {{--<td>{{$category->created_at ? $category->created_at->diffForHumans(): 'No Date'}}</td>--}}

                    {{--</tr>--}}
                {{--@endforeach--}}
            {{--@endif--}}
            {{--</tbody>--}}
        {{--</table>--}}
    {{--</div>--}}
@stop