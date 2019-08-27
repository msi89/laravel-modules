@extends('blog::layouts.master')

@section('content')
    <h1>{!! config('blog.name') !!}</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
        <a href="{{ url('/blog') }}">Home</a>
    </p>
    <h1>{{ $blog->title }}</h1>
    <p>{{ $blog->body }}</p>
@stop
