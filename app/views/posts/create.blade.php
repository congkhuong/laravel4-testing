@extends('layouts.master')

@section('content')

	@include('includes._form-error')
	{{ Form::open(array('route' => 'posts.store', 'method' => 'POST', 'class' => 'form-horizontal')) }}
		@include('posts._form')
	{{ Form::close() }}

@endsection