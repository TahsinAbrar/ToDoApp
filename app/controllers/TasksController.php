<?php

class TasksController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @param  Project  $project
     * @return Response
     */
    public function index(Project $project)	{
        $this->layout->content = View::make('tasks.index', compact('project'));	}

    /**
     * Show the form for creating a new resource.
     *
     * @param  Project  $project	 * @return Response
     */
    public function create(Project $project)	{
        $this->layout->content = View::make('tasks.create', compact('project'));	}

    /**
     * Store a newly created resource in storage.
     *
     * @param  Project  $project	 * @return Response
     */
    public function store(Project $project)
    {
        //$input = Input::all();
        $input['project_id'] = $project->id;

    //get image
        $image = Input::file('image');
    //image name
        //$filename = $image->getClientOriginalName();
        $file_path = Input::file('image')->move('public/uploads',Input::file('image')->getClientOriginalName());
    //instantiate new product model
        $task = new Task;
//        $task->name = Input::get('name');
//        $task->slug = Input::get('slug');
//        $task->completed = Input::get('completed');
//        $task->description = Input::get('description');
        $input = Input::all();
        $task->image = $file_path;
        $input['image']=$task->image;


//        $photo= Input::file('image')->getClientOriginalName();
//        Input::file('image')->move('public/uploads',$photo);
        $task = new Task($input);
        //$image= Input::file('image')->move(__DIR__.'/storage/',Input::file('image')->getClientOriginalName());
        if ( $task->save() )
            return Redirect::route('projects.show', $project->slug)->with('message', 'Task created.');
        else
            return Redirect::route('projects.tasks.create', $project->slug)->withInput()->withErrors( $task->errors() );
    }

    /**
     * Display the specified resource.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function show(Project $project, Task $task)	{
        $this->layout->content = View::make('tasks.show', compact('project', 'task'));	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function edit(Project $project, Task $task)	{
        $this->layout->content = View::make('tasks.edit', compact('project', 'task'));	}

    /**
     * Update the specified resource in storage.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */

    public function update(Project $project, Task $task)
    {
        $input = Input::all();
        $task->fill($input);

        $file = Input::file('file'); // your file upload input field in the form should be named 'file'

        $destinationPath = public_path().'uploads/'.str_random(6);
        $filename = $file->getClientOriginalName();
//$extension =$file->getClientOriginalExtension(); //if you need extension of the file
        $uploadSuccess = Input::file('file')->move($destinationPath, $filename);

        if( $uploadSuccess ) {
            return Response::json('success', 200); // or do a redirect with some message that file was uploaded
        } else {
            return Response::json('error', 400);
        }

        if ( $task->updateUniques() )
            return Redirect::route('projects.tasks.show', [$project->slug, $task->slug])->with('message', 'Task updated.');
        else
            return Redirect::route('projects.tasks.edit', [$project->slug, array_get($task->getOriginal(), 'slug')])->withInput()->withErrors( $task->errors() );
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  Project  $project	 * @param  Task     $task	 * @return Response
     */
    public function destroy(Project $project, Task $task)	{
        //
    }

}