@extends('layouts.admin')
@section('styles')
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css">
@endsection
@section('content')

    <h1 class="text-success">Upload Media</h1>

    {!! Form::open(['method'=>'POST','action'=>'AdminMediaController@store','class'=>'dropzone']) !!}





    {!! Form::close() !!}
@stop


@section('scripts')

    {{--<script type="text/javascript" src="/resources/assets/"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>--}}
    {{ Html::script('dropzone/dropzone.js') }}


@endsection









