@extends('layout')

@section('title','create a new project')

@section('content')
    <h1 class="title">Create a New Project</h1>

    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" name="title" class="input {{ $errors->has('title') ? 'is-danger' : ''}}" placeholder="Project title" value="{{ old('title') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger' : ''}}"  placeholder="project description" required>{{ old('description') }}</textarea>
            </div>
        </div>
        <div class="field">
            <button type="submit" class="button is-link">Create Project</button>
        </div>

        @include('errors')

    </form>
 @endsection
