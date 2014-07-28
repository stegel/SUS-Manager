@extends('layouts.layout')

@section('main')

<h1>Enter scores for {{ $project->name }}</h1>
{{ Form::open(array('route' =>array('projects.scores.store',$project->id),'class' => 'form-horizontal')) }}
    <div class="form-group row">
      {{ Form::label('q1', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q1', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q2', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q2', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q3', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q3', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q4', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q4', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q5', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q5', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q6', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q6', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q7', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q7', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q8', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q8', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q9', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q9', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::label('q10', 'I think that I would like to use this system frequently:',array('class' => 'col-md-5 control-label')) }}
      <div class="col-md-1">
        {{ Form::text('q10', null, array('class' => 'form-control','maxlength' => '3','size' => '3')) }}
      </div>
    </div>
    <div class="form-group">
      {{ Form::hidden('project_id',$project->id) }}
      {{ Form::submit('Submit', array('class' => 'btn')) }}
      {{ link_to_route('projects.show', 'Cancel', $project->id, array("class" => 'btn'))}}
    </div>

{{ Form::close() }}

@if ($errors->any())
  <ul>
    {{ implode(null, $errors->all('<li class="error">:message</div>')) }}
  </ul>
@endif

@stop
