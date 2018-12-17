@extends('layout.layout')

@section('title', 'Projects - Show project')

@section('content')

<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

<p><a href="/projects/{{ $project->id }}/edit">Edit {{ $project->title }}</a></p>

@if($project->tasks->count())
<div class="box">
    <h2>Tasks</h2>
    <ol>
        @foreach ($project->tasks as $task)
        <div>
            <form action="/tasks/{{ $task->id }}" method="POST">

                {{ method_field('PATCH') }}

                {{ csrf_field() }}


                <label for="completed" class="checkbox {{ $task->completed ? 'is-complete' : '' }}">
                    <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                    {{ $task->description }}
                </label>
            </form>
        </div>
        @endforeach
    </ol>
</div>
@endif

{{-- add a new task --}}
<form action="/projects/{{ $project->id }}/tasks" method="POST" class="box">

    {{ csrf_field() }}

    @include('layout.errors')

    <div class="field">
        <label for="description" class="label">New Task</label>

        <div class="control">
            <input type="text" class="input {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="New task" value="{{ old('description') }}" required>
        </div>
    </div>

    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Add new task</button>
        </div>
    </div>
</form>

@endsection