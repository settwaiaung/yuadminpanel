@extends('layouts.app')
@section("content")

	<div class="container">
		
		<form method="post" action="{{route('announcement.store')}}">

			{{csrf_field()}}
			<div class="form-group">
				<label>Title</label>
				<button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
			<input type="text" class="form-control" placeholder="Title" id="title" name="title">
			</div>
			<div class="form-group">
			<label for="summernote">Body</label>
			<textarea class="form-control" rows="10" cols="80" name="body" id="summernote"></textarea>
			</div>
			
		</form>
	</div>	


@endsection()