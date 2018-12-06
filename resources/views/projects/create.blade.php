@extends('layout.layout')

@section('title', 'Projects - Create a new project')

@section('content')

<h1>Create a new project</h1>

<form action="/projects" method="POST">

    {{ csrf_field() }}

    <div>
        <input type="text" name="title" placeholder="Title">
    </div>
    <div>
        <textarea type="text" name="description" placeholder="Description"></textarea>
    </div>
    <div>
        <button type="submit">Create</button>
    </div>
</form>

@endsection