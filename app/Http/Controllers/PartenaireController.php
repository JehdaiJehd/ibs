<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePartenaireRequest;
use App\Http\Requests\UpdatePartenaireRequest;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        
        $partenaires = Partenaire::all();
        
        return view('admin.partenaires.index', compact('partenaires'));
    }

    public function create()
    {
        //
        return view('admin.partenaires.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
           $datas = $request->validate([
                'nom_partenaire' => 'required',
                'secteur' => 'required',
                'localisation' => 'required',
                'commentaires' => 'required'

            ]);

            $file_name = $request->file('image_logo')->getClientOriginalName();

            $path = $request->file('image_logo')->storeAs('images_partenaires', $file_name, 'public');

            $datas['image_logo'] = '/storage/'.$path;

           

            Partenaire::create($datas);

            return redirect()->route('partenaires.index')->with('success', 'Partenaire crée avec succès !');




    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partenaire $partenaire)
    {
        //
        return view('admin.partenaires.edit', compact('partenaire'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //

       $datas = $request->validate([
            'nom_partenaire' => 'required',
            'secteur' => 'required',
            'localisation' => 'required',
            'commentaires' => 'required'


        ]);

        $file_name = $request->file('image_logo')->getClientOriginalName();

        $path = $request->file('image_logo')->storeAs('images_partenaires', $file_name, 'public');

        $datas['image_logo'] = '/storage/'.$path;

        $partenaire->update($datas);

        return redirect()->route('partenaires.index')->with('success', 'Partenaire Modifié avec succès !');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partenaire $partenaire)
    {

        $partenaire->delete();


        Storage::disk('public')->delete('/storage/images_partenaires'.$partenaire->image_logo);

        return redirect()->route('partenaires.index')->with('success', 'Partenaire Supprimé avec succès !');
    }
}