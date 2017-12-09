@extends('layouts.app')
@section('content')
	<div class="container">
		<div class="row">
			<h2>{{$announcement->title}}</h2>
		</div>
		<div class="row">
			<p>
				@php
					echo $announcement->body;
				@endphp
			</p>
		</div>
	</div>


@endsection