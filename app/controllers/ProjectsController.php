<?php

class ProjectsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /projects
	 *
	 * @return Response
	 */
    public function index()
    {
        $projects = Project::all();
        $this->layout->content = View::make('projects.index', compact('projects'));
    }

	/**
	 * Show the form for creating a new resource.
	 * GET /projects/create
	 *
	 * @return Response
	 */
	public function create()
	{
        // return View::make('projects.index');
        $this->layout->content = View::make('projects.index');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /projects
	 *
	 * @return Response
	 */
	public function store()
	{
        //
	}

	/**
	 * Display the specified resource.
	 * GET /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Project $project)
	{
        // return View::make('projects.index');
        $this->layout->content = View::make('projects.show', compact('project'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /projects/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Project $project)
	{
        // return View::make('projects.index');
        $this->layout->content = View::make('projects.show', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Project $project)
	{
        // return View::make('projects.index');
        $this->layout->content = View::make('projects.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /projects/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Project $project)
	{
		//
	}

}