@extends('backend._template.master')

@section('content')
    <h1>{{ $topic->title }}</h1>
    <hr>
    <p>{{ $topic->body }}</p>
@endsection
