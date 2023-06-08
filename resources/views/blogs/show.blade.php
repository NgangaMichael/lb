@extends('blogs.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <h5>Title: {{$blog->title}}</h5>
    <h6>Author: {{$blog->author}}</h6>
    <p>{{$blog->body}}</p>

    <a class="btn btn-warning btn-sm " href="{{ url('/blogs/'.$blog->id. '/edit') }}">Edit</a>
    <form method='POST' class="form-group d-inline" action="{{ url('/blogs/'.$blog->id) }}">
        {{method_field('Delete')}}
        {{ csrf_field() }}
        <button class="btn btn-danger btn-sm">Delete</button>
    </form>
</div>

@endsection