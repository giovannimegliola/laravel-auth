@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>

        @foreach ($projects as $project)
        <p>
            {{$project->title}}
        </p>
        <div class="my-3">
            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pen"></i></a>
            <a href="{{route('admin.projects.destroy', $project->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
        </div>

        @endforeach
    </section>
@endsection
