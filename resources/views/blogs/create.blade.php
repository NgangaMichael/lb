@extends('blogs.layout')
@section('content')
<form class="form-group" action='{{ url("blogs") }}' method='POST'>
    {!! csrf_field() !!}
    <label class='mt-2' for="title">Title</label>
    <input class='form-control' type="text" name='title'>

    <label class='mt-2' for="author">Author</label>
    <input class='form-control' type="text" name='author'>

    <label class='mt-2' for="body">Body</label>
    <textarea class='form-control' name="body" id="" cols="30" rows="10"></textarea>

    <button class='btn btn-success btn-sm mt-2'>Save</button>
</form>

@endsection