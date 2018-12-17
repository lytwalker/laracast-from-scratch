@extends('layout.layout')

@section('title', 'Projects - Create a new project')

@section('content')

<h1>Create a new project</h1>

<form action="/projects" method="POST">

    {{ csrf_field() }}

    <div class="field">
        <label class="label" for="title">Title</label>
        <div class="control">
            <input type="text" name="title" placeholder="Title" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}"
                required>
        </div>
    </div>
    <div class="field">
        <label class="label" for="description">Description</label>
        <div class="control">
            <textarea type="text" name="description" placeholder="Description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
                required>{{ old('description') }}</textarea>
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link">Create</button>
        </div>
    </div>

    @include('layout.errors')
    
</form>

@endsection