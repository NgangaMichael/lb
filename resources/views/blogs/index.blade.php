@extends('blogs.layout')
@section('content')

@php
use Illuminate\Support\Str;
@endphp

<div class="container">
    <div class="row">
        <h4>All Blogs</h4>
            @foreach($blogs as $blog)
                <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $blog->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Author: {{ $blog->author }}</h6>
                    <p class="card-text">{{ Str::limit($blog->body, 90) }}</p>
                    <a href="{{ url('/blogs/'. $blog->id) }}" class="card-link">More</a>
                </div>
                </div>
                </div>
            @endforeach
    </div>
</div>

@endsection 