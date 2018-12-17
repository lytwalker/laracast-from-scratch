@extends('layout.layout')

@section('title', 'Projects - Show project')

@section('content')

<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>

<p><a href="/projects/{{ $project->id }}/edit">Edit {{ $project->title }}</a></p>

@if($project->tasks->count())
<h2>Tasks</h2>
<p>
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
</p>
@endif

@endsection