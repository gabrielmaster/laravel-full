<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::latest()->paginate();

        return view('projects.index', compact('projects'));
    }
    public function show(Project $project)
    {
        return view('projects.show', [
            'project' => $project
        ]);
    }
    public function create()
    {
        return view('projects.create', [
            'project' => new Project
        ]);
    }
    public function store(SaveProjectRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito.');
    }
    public function edit(Project $project)
    {
        return view('projects.edit', [
            'project' => $project
        ]);
    }
    public function update(Project $project, SaveProjectRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue actualizado con exito.');
    }
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito.');;
    }
}
