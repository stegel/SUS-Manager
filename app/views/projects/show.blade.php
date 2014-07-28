@extends('layouts.layout')
@section('main')

<h1>{{ $project->name }}</h1>
<p>{{ $project->description }}</p>
<table class="table">

    <thead>
      <tr>
        <th>Q1</th>
        <th>Q2</th>
        <th>Q3</th>
        <th>Q4</th>
        <th>Q5</th>
        <th>Q6</th>
        <th>Q7</th>
        <th>Q8</th>
        <th>Q9</th>
        <th>Q10</th>
        <th>SUS</th>
      </tr>
    </thead>
  @foreach($project->scores as $score)
    <tr>
      <td>{{ $score->q1 }}</td>
      <td>{{ $score->q2 }}</td>
      <td>{{ $score->q3 }}</td>
      <td>{{ $score->q4 }}</td>
      <td>{{ $score->q5 }}</td>
      <td>{{ $score->q6 }}</td>
      <td>{{ $score->q7 }}</td>
      <td>{{ $score->q8 }}</td>
      <td>{{ $score->q9 }}</td>
      <td>{{ $score->q10 }}</td>
      <td>{{ $score->calculateSUS() }}</td>
      <td>{{ Form::open(array('method' => 'DELETE', 'route' => array('scores.destroy', $score->id))) }}
            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
          {{ Form::close() }}
      </td>
    </tr>
  @endforeach
    <tr>
      <td colspan="11">{{ link_to_route('projects.scores.create', 'Add Score', $project->id, array("class" => 'btn btn-primary'))}}</td>
    </tr>
</table>
<h2>Project SUS: {{ $project->calculateSUS() }}</h2>
