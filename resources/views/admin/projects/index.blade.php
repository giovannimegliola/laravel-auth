@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Projects List</h1>

        <a href="{{route('admin.projects.create')}}" class="btn btn-primary my-3">Create new Project</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->title}}</td>
                        <td>
                            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-secondary"><i class="fa-solid fa-pen"></i></a>
                            <a href="{{route('admin.projects.destroy', $project->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


    </section>
@endsection
