@extends('layouts.master')

@section('title')
	TODO
@stop

@section('description')
	Do some things.
@stop

@section('content')
	<style>
		body {
			background-image: url('https://media.riffsy.com/images/d8f27eb1ad3ef76ba5bf7844cd4e9b1d/raw');
		}
	</style>

	<h1 class="tasks__task -single @if ($task->complete) -complete @endif">{{ $task->task }}</h1>

	@if ($task->complete)
		<h2 class="completed">done did it</h2>
	@endif

@stop