@extends('blog::layouts.master')

@section('content')
    <h1>{!! config('blog.name') !!}</h1>

    <p>
        This view is loaded from module: {!! config('blog.name') !!}
        <a href="{!! url('/blog/create') !!}">Create</a>
    </p>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($blogs as $blog) 
                <tr>
                <td><a href="{{ route('blog-show', ['id' => $blog->id ]) }}">{{ $blog->id }}</a></td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->created_at }}</td>
                </tr>
            @empty 
            <tr><td colspan="3" align="center"> No blogs </td></tr>
            @endforelse
        </tbody>
    </table>
@stop
