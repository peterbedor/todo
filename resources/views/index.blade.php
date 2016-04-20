@extends('layouts.master')

@section('title')
	TODO
@stop

@section('description')
	Do some things.
@stop

@section('content')

	<h1 class="title">todo</h1>
	<div class="tasks">
		<ul class="tasks__list">
			@foreach ($tasks as $task)
				<li class="tasks__task" data-id="{{ $task->id }}" data-ref="task">
					<span class="fa-stack tasks__check" data-ref="taskCheck">
						<i class="fa fa-circle-thin fa-stack-2x"></i>
						<i class="fa fa-check fa-stack-1x @if (! $task->complete)js-hide @endif" data-ref="taskCheckMark"></i>
					</span>
					{{ $task->task }}
					<i class="fa fa-close tasks__delete" data-ref="taskDelete"></i>
					<a href="/task/{{ $task->id }}" class="tasks__view" data-ref="taskView">View</a>
				</li>
			@endforeach
		</ul>
		<form class="tasks__form" action="task/new" method="post">
			{{ csrf_field() }}
			<input type="text" name="task" class="tasks__form-input" placeholder="What needs to be done?">
		</form>
	</div>
	<meta data-set="csrfToken" data-value="{{ csrf_token() }}">
@stop