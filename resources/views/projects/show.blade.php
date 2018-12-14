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
        <li>{{ $task->description }}</li>
        @endforeach
    </ol>
</p>
@endif

@endsection