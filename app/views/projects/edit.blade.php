@extends('layouts.layout')

@section('main')

<h1>Edit Project</h1>
{{ Form::model($project, array('method' => 'PATCH', 'route' => array('projects.update', $project->id))) }}
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
      {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
      {{ link_to_route('projects.show', 'Cancel', $project->id, array("class" => 'btn'))}}

    </li>
  </ul>
{{ Form::close() }}

@if ($errors->any())
  <ul>
    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
  </ul>
@endif

@stop
