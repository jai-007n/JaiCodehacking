@extends('layouts.admin')

@section('content')
@php
$date= date('Y-m-d ');
$today=date('l');
@endphp


<h1 class="text-primary">Welcome Admin Today's Is <strong class="text-success">{{ $date  }}</strong> And <strong class="text-success">{{$today}}</strong></h1>
@stop