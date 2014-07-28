@extends('layouts.layout')

@section('main')

<h1>Create Project</h1>

{{ Form::open(array('route' => 'projects.store')) }}
	<ul>
		<li>
			{{ Form::label('name', 'Name:') }}
			{{ Form::text('name') }}
		</li>
		<li>
			{{ Form::label('description', 'Description:') }}
			{{ Form::textarea('description', null, ['size' => '20x3']) }}
		</li>
		<li>
			{{ Form::submit('Submit', array('class' => 'btn')) }}
			{{ link_to_route('projects.index', 'Cancel', array(), array("class" => 'btn'))}}
		</li>
	</ul>
{{ Form::close() }}

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif

@stop
