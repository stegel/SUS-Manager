@extends('layout')

@section('content')
	<table>
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
	@foreach($scores as $score)
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
		</tr>
	@endforeach
	</table>
			
@stop
