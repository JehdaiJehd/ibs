@extends('layouts_index.base')



@section('content_principal')


        <h5 class="text-center">Tous les Projets de IBS (Impact Bridge Solution)</h5>





        <div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-6 ">
        @foreach($projects as $project)
        <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">{{ $project->nom_projet }}</h5>
    <span>{{ $project->statut_projet }}</span>
    <p class="card-text">{{ $project->details_projet }}</p>
    <a href="#" class="btn btn-primary">Voir +</a>
  </div>
</div>

        @endforeach

        </div>


       
       






@stop