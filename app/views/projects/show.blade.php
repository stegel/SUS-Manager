@extends('layouts.layout')
@section('main')
<div class="btn-group">
  <button type="ubtton" class="btn btn-default">{{ link_to_route("projects.index", "View Projects")}}</button>
  <button type="ubtton" class="btn btn-default">{{ link_to_route("projects.create", "Add Projects")}}</button>
</div>
<h1>{{ $project->name }}</h1>
<p>{{ $project->description }}</p>

<table class="table table-striped table-bordered">

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
        <th>Created At</th>
        <th></th>
      </tr>
    </thead>
  @if (count($project->scores) > 0)
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
        <td>{{ $score->sus }}</td>
        <td>{{ $score->created_at }}</td>
        <td>{{ Form::open(array('method' => 'DELETE', 'route' => array('scores.destroy', $score->id))) }}
              {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
            {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  @endif
    <tr>
      <td colspan="13" style="text-align:center;">{{ link_to_route('projects.scores.create', 'Add New Survey', $project->id, array("class" => 'btn btn-block btn-primary'))}}</td>
    </tr>
</table>
<h2>Project SUS: {{ round($project->sus,2) }}</h2>
