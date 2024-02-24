@extends('layouts.admin')

@section('title', 'Create New Project')

@section('main-content')
    <div class="container pl-0 d-flex flex-wrap flex-col">
        <div class="container">
            <div class="row">
                <div class="col-11">
                    
                    <form action="{{ route('admin.projects.update', ['project' => $project->id], '$project') }}" method="POST">
                        @csrf
                        @method("PUT")


                        <div class="mb-3">
                            <label for="user_id" class="form-label fs-4">User ID</label>
                            <input type="number" class="form-control" id="userId" name="userId"
                                aria-describedby="name" value="{{ old('name') }}">
                            <div id="nameHelp" class="form-text">Type your project name.</div>
                        </div>


                        <div class="mb-3">
                            <label for="name" class="form-label fs-4">Project Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                aria-describedby="name" value="{{ old('name', $project->name) }}">
                            <div id="nameHelp" class="form-text">Type your project name.</div>
                        </div>

                        <div class="mb-3">
                            <label for="programming_languages" class="form-label fs-4">Programming Languages</label>
                            <input type="text" class="form-control" id="programmingLanguages" name="programming_languages" value="{{ old('programming_languages', $project->programming_languages) }}">
                            <div id="languagesHelp" class="form-text">List the programming languages you used to write the project.</div>
                        </div>

                        <div class="mb-3">
                            <label for="repo_url" class="form-label fs-4">Repository URL</label>
                            <input type="text" class="form-control" id="repoUrl" name="repo_url" value="{{ old('repo_url', $project->repo_url) }}">
                            <div id="repoUrlHelp" class="form-text">Paste the URL of your GitHub repository.</div>
                        </div>

                        <div class="mb-3">
                            <label for="creation_day" class="form-label fs-4">Creation Day</label>
                            <input type="date" class="form-control" id="creationDay" name="creation_day" value="{{ old('creation_day', $project->creation_day) }}">
                            <div id="dateHelp" class="form-text">Insert the creation date of your project.</div>
                        </div>

                        <button type="submit" action class="btn btn-primary">Update Project</button>
                        <button type="reset" class="btn btn-warning">Empty the form</button>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection
