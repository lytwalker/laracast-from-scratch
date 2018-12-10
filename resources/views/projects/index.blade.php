@extends('layout.layout')

@section('title', 'Projects')

@section('content')

<a href="/projects/create">Create project</a>

<h1>My First Laravel "{{ $stringliteral }}" Webpage</h1>
<h2>{{ $foo }}</h2>

<ul>

@foreach ($projects as $project)

  <li><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></li>

@endforeach

</ul>

@endsection