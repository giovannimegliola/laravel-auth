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
                        <td class="d-flex">
                            <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary me-2"><i class="fa-solid fa-eye"></i></a>

                            <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-secondary me-2"><i class="fa-solid fa-pen"></i></a>

                            <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="cancel-button btn btn-danger" data-item-title="{{$project->title}}"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('profile/partials.modal_delete');
    </section>
@endsection
