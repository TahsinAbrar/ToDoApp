
<!-- /app/views/tasks/partials/_form.blade.php -->
<ul>
    <li>
        {{ Form::label('name', 'Name:') }}
        {{ Form::text('name') }}
    </li>

    <li>
        {{ Form::label('slug', 'Slug:') }}
        {{ Form::text('slug') }}
    </li>

    <li>
        {{ Form::label('completed', 'Completed:') }}
        {{ Form::checkbox('completed') }}
    </li>

    <li>
        {{ Form::label('description', 'Description:') }}
        {{ Form::textarea('description') }}
    </li>

    <li>
        {{ Form::label('image', 'Image:') }}
        {{ Form::file('image') }}
    </li>

    <li>
        {{ Form::submit($submit_text) }}
    </li>
</ul>