@extends('layout.layout')

@section('title', 'Projects - Edit project')

@section('content')

<h1 class="title">Edit project</h1>

<form action="/projects/{{ $project->id }}" method="POST">

    {{ method_field('PATCH') }}

    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" name="title" placeholder="Title" value="{{ $project->title }}">
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea type="text" name="description" placeholder="Description">{{ $project->description }}</textarea>
        </div>
    </div>
    <div class="field">
        <button type="submit" class="button is-link">Update</button>
    </div>

</form>

@endsection