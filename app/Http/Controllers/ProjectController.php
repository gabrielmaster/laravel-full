<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

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
    public function show($id)
    {
        return view('projects.show', [
            'project' => Project::findOrFail($id)
        ]);
    }
}
