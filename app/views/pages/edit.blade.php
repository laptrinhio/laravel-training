@extends('layouts.master')

@section('head-title')
	Thay doi noi dung blog
@stop

@section('content')

<div class="container">
	<a href="{{ URL::route('blog.list') }}" class="btn btn-link">
		<span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
		Quay lại danh sách blog
	</a>
</div>

<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading">
			<div class="panel-title">
				<h2>
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
					Cập nhật nội dung
				</h2>
			</div>
		</div>

		<div class="panel-body">
			{{  Form::open([
					'route' => [ 'blog.edit.update', $blog->id ], 
					'method' => 'PUT'
			 	]) 
			}}
				
				<div class="form-group">
				{{ Form::label('title', 'Tiêu đề', ['id' => '', 'class' => '']) }}
				{{ Form::text('title', $blog->title, ['id' => '', 'class' => 'form-control']) }}
				</div>
				
				<div class="form-group">
				{{ Form::label('content', 'Nội dung', ['id' => '', 'class' => '']) }}
				{{ Form::textarea('content', $blog->content, ['id' => '', 'class' => 'form-control']) }}
				</div>

				{{ Form::submit('Cập nhật', [ 'class' => 'btn btn-danger']) }}

			{{ Form::close() }}
		</div>
	</div>
</div>
@stop