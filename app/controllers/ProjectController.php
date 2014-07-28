<?php

class ProjectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$projects = Project::paginate(10);

		return View::make('projects.index', compact('projects'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('projects.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Project::$rules);

		if($validation->passes())
		{
			Project::create($input);

			return Redirect::route('projects.index');
		}

		return Redirect::route('projects.create')->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = Project::find($id);

		return View::make('projects.show',compact('project'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$project = Project::find($id);

		return View::make("projects.edit",compact('project'));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();

		$validation = Validator::make($input, Project::$rules);

		if($validation->passes())
		{
			$project = Project::find($id);
			$project->update($input);
			return Redirect::route('projects.show', $id);
		}

		return Redirect::route('projects.edit', $id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Project::find($id)->delete();
		return Redirect::route('projects.index');
	}



}
