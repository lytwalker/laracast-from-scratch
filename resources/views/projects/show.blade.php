@extends('layout.layout')

@section('title', 'Projects - Show project')

@section('content')

<h1 class="title">{{ $project->title }}</h1>
<p>{{ $project->description }}</p>
<p><a href="/projects/{{ $project->id }}/edit">Edit {{ $project->title }}</a></p>

@endsection