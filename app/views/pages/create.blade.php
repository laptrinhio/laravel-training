@extends('layouts.master')

@section('head-title')
	Tao blog moi
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
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
					Tạo blog mới
				</h2>
			</div>
		</div>

		<div class="panel-body">
			{{ Form::open(['url' => '/blogs/create', 'method' => 'POST']) }}
				
				<div class="form-group">
				{{ Form::label('title', 'Tiêu đề', ['id' => '', 'class' => '']) }}
				{{ Form::text('title', '', ['id' => '', 'class' => 'form-control']) }}
				</div>

				<div class="form-group">
				{{ Form::label('content', 'Nội dung', ['id' => '', 'class' => '']) }}
				{{ Form::textarea('content', '', ['id' => '', 'class' => 'form-control']) }}
				</div>

				{{ Form::submit('Create', ['class' => 'btn btn-danger']) }}

			{{ Form::close() }}
		</div>
	</div>
</div>
@stop