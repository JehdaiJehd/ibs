@extends('admin/layout_admin')




@section('content_principal')


<h4>Ajouter un Partenaire</h4>

                        <div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Création dun Partenaire</h6>
                            <form method="POST" action="{{ route('partenaires.store') }}" enctype="multipart/form-data">
                            @csrf    
                            @method('post')

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nom:</label>
                                    <input name="nom_partenaire" type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Tapez le nom du partenaire... (ex: Organisation Mondiale de la Santé)">
                                    
                                    </div>
                                
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Secteur:</label>
                                    <input  name="secteur" type="text" class="form-control" id="exampleInputPassword1" placeholder="Saisissez le secteur d'intervention du partenaire... (ex. Humanitaire)">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Localisation:</label>
                                    <input  name="localisation" type="text" class="form-control" id="exampleInputPassword1" placeholder="Tapez la localisation du partenaire... (ex. Africa/RDC/Kinshasa Ville)">
                                </div>
                                <div class="form-floating">
                                <label>Commentaires</label>
                                <textarea name="commentaires" class="form-control" placeholder="Tapez des informations supplementaires du partenaire..."
                                     style="height: 150px;"></textarea>
                                
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Ajouter une photo/Logo du Partenaire:</label>
                                <input class="form-control" type="file" id="formFile" name="image_logo">
                            </div>

                                <button type="submit" class="btn btn-primary mt-2">Ajouter</button>
                            </form>
                        </div>

                        </div>
                



@stop