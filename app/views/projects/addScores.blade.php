@extends('layouts.layout')

@section('main')

{{ Form::open(array('route' => 'scores.store')) }}

  <ul>
    <li>
      {{ Form::label('q1', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q1') }}
    </li>
    <li>
      {{ Form::label('q2', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q2') }}
    </li>
    <li>
      {{ Form::label('q3', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q3') }}
    </li>
    <li>
      {{ Form::label('q4', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q4') }}
    </li>
    <li>
      {{ Form::label('q5', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q5') }}
    </li>
    <li>
      {{ Form::label('q6', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q6') }}
    </li>
    <li>
      {{ Form::label('q7', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q7') }}
    </li>
    <li>
      {{ Form::label('q8', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q8') }}
    </li>
    <li>
      {{ Form::label('q9', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q9') }}
    </li>
    <li>
      {{ Form::label('q10', 'I think that I would like to use this system frequently:') }}
      {{ Form::text('q10') }}
    </li>
    <li>
      {{ Form::submit('Submit', array('class' => 'btn')) }}
    </li>
  </ul>
{{ Form.close() }}
