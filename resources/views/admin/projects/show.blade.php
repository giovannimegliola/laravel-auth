@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->body}}</p>
        <img src="{{ asset('storage/' . $project->image)}}" alt="{{$project->title}}" class="w-50">

        <div class="my-3">
            <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn btn-primary me-2"><i class="fa-solid fa-pen"></i> Edit Project</i></a>
        </div>

    </section>
@endsection
