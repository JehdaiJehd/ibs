<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class VoirTousLesProjetsController extends Controller
{
    //

    public function get_projects()
    {
        $projects = Project::latest()->paginate(15);

        return view('voirLesProjets', compact('projects'));
    
    }

    public function get_a_project(Project $project)
    {
        return view('project', compact('project'));
    }
}
