@extends('admin/layout_admin')




@section('content_principal')


<div><h6>Explorer le projet</h6></div>

<div class="card">
  <h5 class="card-header">{{ $project->nom_projet }}</h5>
  <div class="card-body">
    <h5 class="card-title">Statut du projet: {{ $project->statut_projet }}</h5>
    <p class="card-text">
     Détails sur le projet: {{ $project->details_projet }}

    </p>
    <p>
    Impact du projet: {{ $project->impact_projet  }}
    </p>
  </div>
</div>









@stop 