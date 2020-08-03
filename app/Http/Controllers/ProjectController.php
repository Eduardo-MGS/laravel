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

    public function show(Project $project)
    {
        // return $id;

        return view('projects.show', compact('project'));
    }

    public function create()
    {
        // return $id;

        return view('projects.create');
    }

    public function store()
    {
        /*
        Project::create([
            'title' => request('title'),
            'url' => request('url'),
            'description' => request('description'),
        ]);
        */

        Project::create(request()->all());

        return redirect()->route('projects.index');
    }
}
