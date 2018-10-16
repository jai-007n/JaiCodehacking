@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table table-striped table-bordered table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>

        </tr>
        </thead>
        <tbody>
        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td> <a href="{{route('admin.posts.edit',$post->id)}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name : 'UnCateogrized'}}</td>
                    <td><img height="70" width="70" src="{{$post->photo ? $post->photo->file :'/images/No.jpg'}}" alt=""></td>
                    <td>{{$post->title}}</td>
                    <td>{{str_limit($post->body,7)}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>

                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop