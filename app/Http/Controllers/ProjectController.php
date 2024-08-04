<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Partenaire;
use Illuminate\Http\Request;


class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $projects = Project::latest()->paginate(15);

        return view('admin.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $partenaires = Partenaire::all();

        return view('admin.projects.create', compact('partenaires'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nom_projet' => 'required',
            'statut_projet' => 'required',
            'details_projet' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'impact_projet' => 'required',
            'partenaire_id' => 'required'
        ]);

           

       Project::create($request->all());

      return redirect()->route('projects.index')->with('success', 'Projet crée avec succès !');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
        return view('admin.projects.show', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        $partenaires = Partenaire::all();

        return view('admin.projects.edit', compact('partenaires', 'project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
            'nom_projet' => 'required',
            'statut_projet' => 'required',
            'details_projet' => 'required',
            'date_debut' => 'required',
            'date_fin' => 'required',
            'impact_projet' => 'required',
            'partenaire_id' => 'required'
        ]);


        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet Modifié avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet Supprimé avec succès !');

    }
}
