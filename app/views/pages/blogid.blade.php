@extends('layouts.master')

@section('head-title')
	Noi dung blog
@stop

@section('content')

<h1>{{ $blog->title }}</h1>
<p class="lead">
	<a href="{{ URL::route('blog.list') }}">
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		Back
	</a>
</p>
<hr>
<p>
	{{ $blog->content }}
</p>

@stop