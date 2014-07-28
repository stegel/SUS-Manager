<?php

class ProjectScoreController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($projectId)
	{
		$project = Project::find($projectId);

		return View::make('projectScore.create',array('project' => $project));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($projectId)
	{
		$input = Input::except('project_id');
		$validation = Validator::make($input, Score::$rules);

		$project = Project::find($projectId);

		if($validation->passes())
		{
			$score = Score::create($input);

			$score = $project->scores()->save($score);

			return Redirect::route('projects.show',$project->id);
		}

		return Redirect::route('projects.scores.create',$project->id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Score::find($id)->delete();
		return Redirect::route('projects.index');
	}


}
