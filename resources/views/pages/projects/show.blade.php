@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $project->title }}</h1>
        <h4 class="">{{ $project->repo_name }}</h4>
        <hr>
        <div class="d-flex gap-3">
            <figure>
                <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->repo_name }}">
            </figure>
            <div class="border-start ps-3">
                <h6>Description:</h6>
                <p>{{ $project->description }}</p>
            </div>
        </div>
        <hr>

    </div>
@endsection