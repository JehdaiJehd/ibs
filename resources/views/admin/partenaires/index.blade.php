@extends('admin/layout_admin')




@section('content_principal')

        <h4>Gestion des Partenaires</h4>

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
                        <h6 class="mb-0">Nos Partenaires</h6>
                        <a href="{{ route('partenaires.create') }}" class="btn btn-sm btn-primary">Ajouter</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                           
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Secteur</th>
                                    <th scope="col">Localisation</th>
                                    <th scope="col">Commentaires</th>
                                    <th scope="col">Logo</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($partenaires as $partenaire)
                                <tr>
                                    <td>{{ $partenaire->id }}</td>
                                    <td>{{ $partenaire->nom_partenaire }}</td>
                                    <td>{{ $partenaire->secteur }}</td>
                                    <td>{{ $partenaire->localisation }}</td>
                                    <td>{{ $partenaire->commentaires }}</td>
                                    
                                    <td><img src="{{ asset($partenaire->image_logo) }}" width="60" height="60" alt="{{ $partenaire->name }}" srcset=""></td>
                                    <td class="d-flex"><a class="btn btn-sm btn-secondary" href="{{ route('editPart', $partenaire) }}">Editer</a>
                              
                                    <form action="{{ route('partenaires.destroy', $partenaire->id) }}" method="post" class="mt-2">
                                        @csrf
                                        @method('DELETE')

                                         <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer ce partenaire ?');" class="px-2 py-2 text-white btn btn-danger">Supprimer</button>
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