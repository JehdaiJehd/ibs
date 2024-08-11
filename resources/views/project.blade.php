@extends('layouts_index.base')



@section('content_principal')


<h5 class="text-center">Voir le Projet</h5>


<div class="container">
<div class="row">

        <div class="row bg-light rounded h-100 p-4  ">
    
        <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">Nom du Projet: {{ $project->nom_projet }}</h5>
    <span>Statut du projet: {{ $project->statut_projet }}</span> <br>
   <span>Nom du Partenaire: {{ $project->partenaire->nom_partenaire }}</span>
    <p class="card-text">Détails du projet: {{ $project->details_projet }}</p>
    <p class="card-text">{{ $project->impact_projet }}</p>
    <span>Date de début: {{ $project->date_debut }}</span>
    <span>Date de fin: {{ $project->date_fin }}</span>
    
  </div>
</div>

       

        </div>

        </div>
       
        </div>











@stop