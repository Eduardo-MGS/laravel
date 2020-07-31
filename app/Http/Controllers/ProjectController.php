<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function index()
    {
        $portfolio = Project::orderBy('created_at', 'ASC')->paginate(2);

        return view('projects.index', compact('portfolio'));
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);

        return view('projects.show', compact('project'));
    }
}
