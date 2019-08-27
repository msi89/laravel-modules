@extends('blog::layouts.master')

@section('content')
    <h1>{!! config('blog.name') !!}</h1>
    <a href="{!! route('blog-index') !!}">Home</a>
    <form action="{{ route('blog-store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Title</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Message</td>
                <td><textarea name="body" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><button type="submit">Save</button></td>
            </tr>
        </table>
   </form>

    
@stop
