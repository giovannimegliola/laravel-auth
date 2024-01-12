@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>

        @foreach ($projects as $project)
        <p>
            {{$project->title}}
        </p>
        <p>
            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
        </p>

        @endforeach
    </section>
@endsection
