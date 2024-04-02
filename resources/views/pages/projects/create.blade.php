@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create new project</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('dashboard.projects.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error ('title') is-invalid @enderror" name="title" id="title" />

                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="cover_image" class="form-label @error('cover_image') is-invalid @enderror">Cover image</label>
                <input type="file" class="form-control" name="cover_image" id="cover_image" />
            </div>

            <div class="mb-3">
                <label for="repo_link" class="form-label">Repository link</label>
                <input type="text" class="form-control" name="repo_link" id="repo_link" />
            </div>


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>

        </form>
    </div>
@endsection
