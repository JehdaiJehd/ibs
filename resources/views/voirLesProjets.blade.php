@extends('layouts_index.base')



@section('content_principal')


        <h5 class="text-center">Tous les Projets de IBS (Impact Bridge Solution)</h5>


<div class="container">
<div class="row">

        <div class="row bg-light rounded h-100 p-4  ">
    
        @foreach($projects as $project)
        <div class="card w-75">
  <div class="card-body">
    <h5 class="card-title">{{ $project->nom_projet }}</h5>
    <span>{{ $project->statut_projet }}</span>
    <p class="card-text">{{ $project->details_projet }}</p>
    <a href="{{route('getProject', $project)}}" class="btn btn-primary">Voir +</a>
  </div>
</div>

        @endforeach

        </div>

        </div>
       
        </div>






@stop