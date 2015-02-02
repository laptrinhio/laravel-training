@extends('layouts.master')

@section('head-title')
	Noi dung blog
@stop

@section('content')

<div class="container">
	<a href="{{ URL::route('blog.list') }}">
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		Back
	</a>
</div>

<div class="container">
	<h1>{{ $blog->title }}</h1>
	
</div>

<div class="container">
	<div class="panel panel-default">
		<div class="panel-body">
			<a href="#" class="btn btn-info">Edit</a>
			<a href="#" class="btn btn-danger">Delete</a>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-body">
			{{ $blog->content }}
		</div>
	</div>
</div>


@stop