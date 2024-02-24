@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('main-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-start d-inline-block pb-2">Projects</h1>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">User ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Programming Languages</th>
                            <th scope="col">Repo URL</th>
                            <th scope="col">Created at</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $projects as $project ) 
                        {{-- $index=> --}}
                        <tr>
                            <td scope="col">{{ $project->user_id }}</td>

                            <td scope="col"> {{ $loop->iteration }} </td>
                            <a href="{{ route('admin.projects.show', $project) }}">
                                <td scope="col">{{ $project->name }}</td>
                            </a>
                            <td scope="col">{{ $project->programming_languages }}</td>
                            <a href="{{ $project->repo_url }}">
                                <td scope="col">{{ $project->repo_url }}</td>
                            </a>
                            <td scope="col">{{ $project->creation_day }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.projects.show', $project) }}">
                                    <button class="btn btn-success me-1">
                                        Open
                                    </button>
                                </a>
                                <a href="{{ route('admin.projects.edit', $project) }}">
                                    <button class="btn btn-warning me-1">
                                        Edit
                                    </button>
                                </a>
                                <form class="d-inline-block" action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button class="btn btn-danger fw-bold me-1">
                                            Delete
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        
                        <h2>Total: {{ $projects->count() }}</h2>
                    </tbody>
                </table>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="button" class="btn btn-primary btn-lg">
                    <a class=" text-decoration-none text-white" href="{{ route('admin.projects.create') }}">
                        Create New Project
                    </a>
                </button>
                </div>
            </div>
        </div>
    </div>
@endsection
