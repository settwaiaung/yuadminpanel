@extends('layouts.app')
@section("content")
<div class="container">
	<form method="post" action="{{route('announcement.update' , $announcement->id)}}">
			<h3 class="text-center">Editor</h3>
		{{csrf_field()}}
		{{ method_field('PUT') }}
		<div class="form-group">
			<label>Title</label>
			<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
			<input type="text" class="form-control" id="title" name="title" value="{{$announcement->title}}">
		</div>
		<div class="form-group">
			<label for="summernote">Body</label>
			<textarea class="form-control" rows="10" cols="80" name="body" id="summernote" >{{$announcement->body}}</textarea>
		</div>

	</form>
</div>

@endsection