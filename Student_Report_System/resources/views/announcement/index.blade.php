@extends('layouts.app')
@section("content")
<div class="container">
	<div class="row">
		<h2 class="text-center">Announcements</h2>
		<a class="btn btn-primary" href="{{route('announcement.create')}}">Create Announcement</a>
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>No</th>
					<th>Title</th>
					<th>Date</th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($announcements as $announcement)
					<tr>
						<td>{{$announcement->id}}</td>
						<td>{{$announcement->title}}</td>
						<td>{{$announcement->created_at}}</td>
						
						<td><a class="btn btn-default" href="{{ route('announcement.show' , $announcement->id ) }}">View</a></td>
						<td><a class="btn btn-primary" href="{{ route ('announcement.edit' , $announcement->id )}}">Edit</a></td>
						<td>
							<form action="{{route('announcement.destroy' , $announcement->id)}}" method="post">
								{{csrf_field()}}
								{{method_field ('delete')}}
								<button class="btn-danger">
									Delete
								</button>
							</form> 
					</tr>

				@endforeach
			</tbody>
		</table>
		{{ $announcements->links() }}
		
		@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
	</div>
</div>




@endsection