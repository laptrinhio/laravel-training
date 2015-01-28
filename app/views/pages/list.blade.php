@extends('layouts.master')

@section('head-title')
	Danh sach blog
@stop

@section('content')

<h1>Danh sach blog</h1>

<p>
	<a href="{{ URL::route('blog.create') }}" class="btn-link btn">+ Create new blog</a>
</p>

<ul>
	@foreach($blogs as $blog)
	<li>
		<a href="/blog/{{ $blog->id }}"> {{ $blog->title }} </a>
	</li>
	@endforeach
</ul>

@stop