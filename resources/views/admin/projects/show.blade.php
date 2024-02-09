@extends('layouts.admin')


@section('content')
    <h1 class="text-center">Project name: {{ $project->title }}</h1>
    <div class="d-flex justify-content-center">
        <img src="{{ $project->thumb }}" alt="immagine proggetto" class="w-50 rounded">
    </div>
    <div class="container my-5">
        <p class="text-uppercase">Project status: {{ $project->status }}</p>
        <p class="text-uppercase">Project language: {{ $project->language }}</p>
        <p class="text-uppercase">Project category: {{ $project->category }}</p>

        <div>
            <h3>Description</h3>
            <p>
            </p>
        </div>

    </div>
@endsection
