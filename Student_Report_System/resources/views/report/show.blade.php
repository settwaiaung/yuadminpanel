@extends('layouts.app')
@section("content")
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>{{  $report->title }}</h3>
			</div>
			<div class="col-md-12">
				<p>
					@php
						echo $report->body;
					@endphp
				</p>
			</div>
		</div>
	</div>
@endsection