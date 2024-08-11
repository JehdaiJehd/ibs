@extends('admin/layout_admin')




@section('content_principal')

        <h4>Gestion des Projets</h4>

        @if($message = Session::get('success'))

            <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
             Félicitations !  {{ $message }}
            </div>
            </div>

        @endif

        <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Nos Projets</h6>
                        <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary">Ajouter</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                           
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Statut</th>
                                    <th scope="col">Détails du Projet</th>
                                    <th scope="col">Date de Début</th>
                                    <th scope="col">Date de fin</th>
                                    <th scope="col">Impact du projet</th>
                                    <th scope="col">Partenaire</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($projects as $project)
                                <tr>
                                    <td>{{ $project->id }}</td>
                                    <td>{{ $project->nom_projet }}</td>
                                    <td>{{ $project->statut_projet }}</td>
                                    <td>{{ $project->details_projet }}</td>
                                    <td>{{ $project->date_debut }}</td>
                                    <td>{{ $project->date_fin }}</td>
                                    <td>{{ $project->impact_projet }}</td>
                                    <td>{{ $project->partenaire->nom_partenaire }}</td>
                                    
                                    <td class="d-flex">
                                        <a href="{{ route('projects.show', $project) }}" class="btn btn-sm btn-success">Voir</a>
                                        <a class="btn btn-sm btn-secondary" href="{{ route('editProject', $project) }}">Editer</a>
                              
                                    <form action="{{ route('projects.destroy', $project->id) }}" method="post" class="mt-2">
                                        @csrf
                                        @method('DELETE')

                                         <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce projet ?');" class="px-2 py-2 text-white btn btn-danger">Supprimer</button>
                                     </form>

                                    </td>

                                </tr>
                               
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
         
            </div>
      
           
@endsection