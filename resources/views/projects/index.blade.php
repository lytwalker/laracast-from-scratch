@extends('layout.layout')

@section('title', 'Projects')

@section('content')

<a href="/projects/create">Create project</a>

<h1>All projects</h1>
<h2>Complete list</h2>

<ul>

@foreach ($projects as $project)

  <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>

@endforeach

</ul>

@endsection