@extends('layouts.layout')
@section('main')

<h1>All Users</h1>
<p>{{ link_to_route('projects.create', 'Add new project') }}</p>
	<table>
		<thead>
			<tr>
				<th>Name</th>
				<th>Description</th>
				<th>SUS</th>
			</tr>
		</thead>
	@foreach($projects as $project)
		<tr>
			<td>{{ $project->name }}</td>
			<td>{{ $project->description }}</td>
			<td>@if(count($project->scores) > 0)
					{{ $project->calculateSUS() }}
				@else
					<p>No Scores</p>
				@endif
			</td>
			<td>{{ link_to_route('projects.edit', 'Edit', array($project->id), array('class' => 'btn btn-info')) }}</td>
			<td>{{ Form::open(array('method' => 'DELETE', 'route' => array('projects.destroy', $project->id))) }}
					{{ Form::submit('Delete', array('class' => 'btn btn-dnager')) }}
				{{ Form::close() }}
			</td>
		</tr>
	@endforeach
	</table>
	{{ $projects->links(); }}

@stop
