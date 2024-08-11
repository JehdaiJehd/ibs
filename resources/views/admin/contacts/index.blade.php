@extends('admin/layout_admin')




@section('content_principal')


<h4>Gestion des Contacts</h4>

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
                <h6 class="mb-0">Nos Prises de contact</h6>
             
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                   
                        <tr class="text-dark">
                           
                            <th scope="col">#</th>
                            <th scope="col">Noms du client</th>
                            <th scope="col">Email du client</th>
                            <th scope="col">Objet du message</th>
                            <th scope="col">Contenu</th>
                            <th scope="col">Date de réception</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($contacts as $contact)
                        <tr>
                            <td>{{ $contact->id }}</td>
                            <td>{{ $contact->nom_complet }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->objet }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>
                            

                        </tr>
                       
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>






@stop 