@extends('blogs.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <form class="form-group" action='{{ url("blogs/".$blog->id) }}' method='POST'>
        {!! csrf_field() !!}
        @method("PATCH")

        <label class='mt-2' for="title">Title</label>
        <input class='form-control' value="{{$blog->title}}" type="text" name='title'>
    
        <label class='mt-2' for="author">Author</label>
        <input class='form-control' value="{{$blog->author}}" type="text" name='author'>
    
        <label class='mt-2' for="body">Body</label>
        <textarea class='form-control' name="body" id="" cols="30" rows="10">{{$blog->body}}</textarea>
    
        <button class='btn btn-warning btn-sm mt-2'>update</button>
    </form>
</div>

@endsection