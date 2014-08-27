<!-- /app/views/projects/edit.blade.php -->
@section('main')
    <h2>Edit Project</h2>

    {{ Form::model($project, ['method' => 'PATCH', 'route' => ['projects.update', $project->slug, $project->slug]]) }}
    @include('projects/partials/_form', ['submit_text' => 'Edit Project'])
    {{ Form::close() }}
@stop