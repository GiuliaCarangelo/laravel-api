<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
// use App\Models\Project

class ProjectController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', ['projects' => $projects ] );
    }

    public function create()
{
    $project = new Project();
    return view('admin.projects.create', compact('project'));
}

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);


        $user = Auth::user();
        $data = $request->all();
        $data['user_id'] = $user->id;
        $project = Project::create($data);
    
        return redirect()->route('admin.projects.show', ['project' => $project->id]);
    }

    /**
     * Display the resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->update($data);

        return redirect()->route('admin.projects.show', $project);
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
