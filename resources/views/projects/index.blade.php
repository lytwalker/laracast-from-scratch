@extends('layout.layout')

@section('title', 'Projects')

@section('content')

<h1>My First Laravel "{{ $stringliteral }}" Webpage</h1>
<h2>{{ $foo }}</h2>

<ul>

@foreach ($projects as $project)

  <li>{{ $project->title }}</li>

@endforeach

</ul>

@endsection