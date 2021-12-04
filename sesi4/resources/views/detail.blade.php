@extends('template')
@section('title', 'Detail Page')
@section('content')
{{$movie->title}}
    @foreach($movie->episodes as $e)
        {{$e->id}}
        {{$e->title}}
    @endforeach
@endsection
