@extends('layouts.app')
@section("content")
<div class="container">
	<div class="row">
		<h2 class="text-center">Announcements</h2>
		<a class="btn btn-primary" href="{{route('announcement.create')}}">Create Announcement</a>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Date</th>
				</tr>
			</thead>
			<tbody>
				@foreach($announcements as $announcement)
					<tr>
						<td>{{$announcement->id}}</td>
						<td>{{$announcement->title}}</td>
						<td>{{$announcement->created_at}}</td>
					</tr>

				@endforeach
			</tbody>
		</table>
	</div>
</div>












@endsection