<!-- /app/views/tasks/create.blade.php -->
@section('main')
    <h2>Create Task for Project "{{ $project->name }}"</h2>

    {{ Form::model(new Task, array('route' => ['projects.tasks.store', $project->slug], 'files' => true)) }}
    @include('tasks/partials/_form', ['submit_text' => 'Create Task'])
    {{ Form::close() }}
@stop