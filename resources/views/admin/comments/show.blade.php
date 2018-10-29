@extends('layouts.admin')


@section('content')


    <div>
        @if(count($comments) > 0)
            <h1 class="text-success">Comments</h1>
            <table class="table ">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Author</th>
                    <th>Email</th>
                    <th>Body</th>
                    {{--<th>Created</th>--}}
                    {{--<th>Updated</th>--}}
                    <th>   View     </th>

                </tr>
                </thead>
                <tbody>

                @foreach($comments as $comment)
                    <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->author}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{str_limit($comment->body,10)}}</td>
                        {{--<td>{{$comment->created_at->diffForHumans()}}</td>--}}
                        {{--<td>{{$comment->updated_at->diffForHumans()}}</td>--}}
                        <td> <a href="{{route('home.post',$comment->post->id)}}">View Post</a></td>
                        <td>
                            @if($comment->is_active==1)
                                {!! Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
                                <input type="hidden" name="is_active" value="0">
                                <div class="form-group">
                                    {!! Form::submit('Un-Approve',['class'=>'btn btn-success']) !!}
                                </div>
                                {!! Form::close() !!}
                            @else
                                {!! Form::open(['method'=>'PATCH','action'=>['PostCommentController@update',$comment->id]]) !!}
                                <input type="hidden" name="is_active" value="1">
                                <div class="form-group">
                                    {!! Form::submit('Approve',['class'=>'btn btn-info']) !!}
                                </div>
                                {!! Form::close() !!}
                            @endif
                        </td>
                        <td>

                            {!! Form::open(['method'=>'DELETE','action'=>['PostCommentController@destroy',$comment->id]]) !!}
                            <input type="hidden" name="is_active" value="0">
                            <div class="form-group">
                                {!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}

                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        @else
            <h1 class="text-center text-primary">No Comments</h1>
        @endif
    </div>
@endsection