@extends('layouts.layout')

@section('main')

<h1>Create Project</h1>

{{ Form::open(array('route' => 'projects.store')) }}
	<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
		{{ Form::label('study_date', 'Date of STudy:') }}
		{{ Form::text('study_date', null, ['class' => 'form-control']) }}
	</div>
	<div class="form-group">
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description', null, ['class' => 'form-control','size' => '20x3']) }}
	</div>
	<div class="form-group">
			{{ Form::submit('Submit', array('class' => 'btn')) }}
			{{ link_to_route('projects.index', 'Cancel', array(), array("class" => 'btn'))}}
	</div>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
