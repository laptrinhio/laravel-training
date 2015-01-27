@extends('layouts.master')

@section('head-title')
	Danh sach blog
@stop

@section('content')

<h1>Danh sach blog</h1>
<hr>

<ul>
	@foreach($blogs as $blog)
	<li>
		<a href="/blog/{{ $blog->id }}"> {{ $blog->title }} </a>
	</li>
	@endforeach
</ul>

@stop