@extends('admin/layout_admin')




@section('content_principal')


<h4>Modifier un Article</h4>
<div class="col-sm-12 col-xl-6">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Mise à jour  d'un Article</h6>
                            <form method="POST" action="{{ route('blogs.update', $blog) }}" enctype="multipart/form-data">
                            @csrf    
                            @method('PUT')

                            <div class="mb-3">
                                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example" name="type_blog">
                                <option selected>Choisissez le type de l'article:</option>
                                <option value="actualite">Actualité</option>
                                <option value="realisation_activite">Réalisation ou Activités</option>
                                <option value="temoignage">Temoignages</option>
                              
                                  </select>

                                  </div>
                                    
                       
                                <div class="form-floating">
                                <label>Contenu:</label>
                                <textarea value="{{ $blog->contenu  }}" name="contenu" class="form-control" placeholder="saisir l'article..."
                                     style="height: 150px;"></textarea>
                                
                            </div>

                            <div class="mb-3">
                                <label for="formFile" class="form-label">Ajouter une photo :</label>
                                <input class="form-control" type="file" id="formFile" name="image_blog">
                            </div>

                                <button type="submit" class="btn btn-primary mt-2">Modifier</button>
                            </form>
                        </div>

                        </div>
                


@stop