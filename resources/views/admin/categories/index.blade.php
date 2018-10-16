@extends('layouts.admin')

@section('content')
    <h1>Categories</h1>
    <div class="col-sm-6">

        {!! Form::open(['method'=>'POST','action'=>'AdminCategoriesController@store']) !!}
        <div>
            {!! Form::label('name','Add New category :') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
        </div><br>

        {!! Form::submit('Create Category',['class'=>'btn btn-primary col-sm-12']) !!}

         @include('includes.User_form_error')

         {!! Form::close() !!}

    </div>



    <div class="col-sm-6">


    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Created Date</th>


        </tr>
        </thead>
        <tbody>
        @if($categories)
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    {{--<td> <img height="70" width="70" src="{{$user->photo ? $user->photo->file :'/images/question.jpg'}}" alt=""></td>--}}
                    {{--<td><a href="{{route('admin.users.edit',$user->id)}}">{{$user->name}}</a></td>--}}
                    <td><a href="{{route('admin.categories.edit',$category->id)}}" >{{$category->name}}</a></td>

                    <td>{{$category->created_at ? $category->created_at->diffForHumans(): 'No Date'}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    </div>
@stop