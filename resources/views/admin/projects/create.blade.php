@extends('admin/layout_admin')




@section('content_principal')


<h4>Ajouter un projet</h4>

                        <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Création d'un Projet</h6>
                            <form method="POST" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                            @csrf    
                            @method('post')

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nom:</label>
                                    <input name="nom_projet" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Tapez le nom du projet... (ex: Projet de Formation à CommCare et Power BI)">
                                    
                                    </div>

                                    <div class="mb-3">
                                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="statut_projet">
                                <option selected>Choisissez le statut actuel du projet:</option>
                                <option value="En_Cours">En Cours</option>
                                <option value="Fini">Finalisé</option>
                                <option value="En_Attente">Non debuté</option>
                                <option value="Reporte">Reporté ou Annulé</option>
                                  </select>

                                  </div>

                                <div class="form-floating">
                                <label>Détails du projet:</label>
                                <textarea name="details_projet" class="form-control" placeholder="Tapez des informations supplementaires sur le projet..."
                                     style="height: 150px;"></textarea>
                                
                            </div>
                            <div class="form-floating">
                                <label>Impact attendu du projet:</label>
                                <textarea name="impact_projet" class="form-control" placeholder="Saisissez l'impact attendu du projet..."
                                     style="height: 150px;"></textarea>
                                
                            </div>

                            <div class="mb-3">
                            <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="partenaire_id">
                                <option selected>Choisissez le partenaire du projet:</option>
                                @foreach($partenaires as $partenaire)
                                <option value="{{ $partenaire->id }}">{{ $partenaire->nom_partenaire }}</option>
                                @endforeach
                                  </select>
                            </div>

                            <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Date de début:</label>
                                    <input  name="date_debut" type="text" class="form-control" id="exampleInputPassword1" placeholder="Saisissez la date de début du projet... (ex. 10/06/2024)">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Date de fin:</label>
                                    <input  name="date_fin" type="text" class="form-control" id="exampleInputPassword1" placeholder="Saisissez la date de fin du projet... (ex. 30/06/2024)">
                                </div>

                                <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
                            </form>
                        </div>

                        </div>
                



@stop