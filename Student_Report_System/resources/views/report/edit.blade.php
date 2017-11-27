@extends('layouts.app')
@section("content")

	<h1 class="text-center">Edit</h1>

	<div class="container">
        <form method="post" action="{{ route('reports.update', $report->id) }}">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $report->title ? $report->title : old('title') }}">
            </div>
            <div class="form-group">
                <label for="body">Details</label>
                <textarea class="form-control" rows="3" name="body" id="body">{{ $report->body ? $report->body : old('body') }}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>

@endsection