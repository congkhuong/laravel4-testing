@extends('layouts.master')

@section('content')

	@include('includes._form-error')
	{{ Form::model($model, array('route' => array('posts.update', $model->id))) }}
		@include('posts._form')
	
	{{ Form::close() }}

@endsection