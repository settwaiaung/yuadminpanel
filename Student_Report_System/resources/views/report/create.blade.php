@extends('layouts.app')
@section("content")
<div class="container">
    <form method="post" action="{{ route('reports.store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="summernote">Details</label>
            <textarea class="form-control" rows="10" cols="80" name="body" id="summernote"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>
@endsection

