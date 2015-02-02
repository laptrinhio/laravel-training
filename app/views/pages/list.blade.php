@extends('layouts.master')

@section('head-title')
	Danh sach blog
@stop

@section('content')

<div class="container">
	<h1>Blog Listings</h1>

	<a href="{{ URL::route('blog.create') }}" class="btn-link btn text-right">+ Create new blog</a>
</div>

<div class="container">
	
	<ul class="list-group">
		@foreach($blogs as $blog)
		<li class="list-group-item">
			<div class="row">
				<div class="col-md-6"><a href="/blog/{{ $blog->id }}"> {{ $blog->title }} </a></div>
				<div class="col-md-6 text-right">
					<a href="#" class="btn btn-info">Edit</a>

					{{  Form::open([
							'route' => [ 'blog.delete', $blog->id ],
							'method' => 'DELETE'
						]) 
					}}
						{{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
					{{ Form::close() }}
				</div>
			</div>
			
		</li>
		@endforeach
	</ul>

</div>

@stop