@extends('layouts.master')

@section('head-title')
	Tao blog moi
@stop

@section('content')

<h1>Tao blog moi</h1>

{{ Form::open(['url' => '/blogs/create', 'method' => 'POST']) }}
	
	{{ Form::label('title', 'Title of the blog', ['id' => '', 'class' => '']) }}
	{{ Form::text('title', 'Title', ['id' => '', 'class' => '']) }}
	<br>

	{{ Form::label('content', 'Content of the blog', ['id' => '', 'class' => '']) }}
	{{ Form::textarea('content', '', ['id' => '', 'class' => '']) }}
	<br>

	{{ Form::submit('Create') }}

{{ Form::close() }}

@stop