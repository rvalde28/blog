@extends('layouts.master')

@section('content')
   @foreach ($todo as $item)
    <h1>{{$item}}</h1>
   @endforeach

@endsection
