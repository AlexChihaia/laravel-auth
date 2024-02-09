@extends('layouts.admin')


@section('content')
    <ul class="d-flex flex-wrap">
        @foreach ($projects as $project)
            <li class="card col-3 mx-5 my-3 text-center">
                <h4>Project name: {{ $project->title }}</h4>
                <div class="card-img ">
                    <img src="{{ $project->thumb }}" alt="Project image" class="w-75 rounded">
                </div>
                <div class="card-body">
                    <p>Category: {{ $project->category }}</p>
                    <p>Status: {{ $project->status }}</p>
                    <p>Main used coding language: {{ $project->language }}</p>
                </div>
                <div>
                    <a href="{{ route('admin.projects.show', $project->slug) }}" class="btn btn-sm btn-success mx-2 ">View
                        Detail</a>
                </div>
                <div>
                    <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-sm btn-warning mx-2">Edit</a>
                </div>
                <form action="{{ route('admin.projects.destroy', $project->slug) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input class="btn btn-sm btn-danger mx-2" type="submit" value="Delete">
                </form>
            </li>
        @endforeach
    </ul>
@endsection
