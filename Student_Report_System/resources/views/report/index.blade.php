@extends('layouts.app')
@section("content")
<div class="container">
	<div class="row">
		<h4 class="text-center">All Report</h4>
		<table class="table table-stripped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th></th>
					<th></th>
					<th>
						@if(\Auth::id())
						<a class="btn btn-default" href="{{ route('reports.create') }}">Create Report</a>
						@else
						<a class="btn btn-default" href="{{ route('login') }}">Create Report</a>
						@endif	
					</th>
				</tr>
			</thead>
			<tbody>
				
				@foreach($reports as $report)
				<tr>
					<td> {{ $report->id }} </td>
					<td> {{ $report->title }}</td>
					<td><a href="{{ route('reports.show', $report->id)}}" class="btn btn-warning">View</a></td>
					<td><a href="{{ route('reports.edit', $report->id)}}" class="btn btn-primary">Edit</a></td>
					<td>
						<form action="{{ route('reports.destroy', $report->id)}}" method="post">
							{{ csrf_field() }}
							{{ method_field('delete') }}
							<button class="btn btn-danger">Delete</button>
						</form>
					</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
		{{ $reports->links() }}
	</div>
</div>
@endsection