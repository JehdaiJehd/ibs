@extends('admin/layout_admin')




@section('content_principal')

        <h4>Gestion du Blog</h4>

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
                        <h6 class="mb-0">Nos Articles</h6>
                        <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-primary">Ajouter</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                           
                                <tr class="text-dark">
                                   
                                    <th scope="col">#</th>
                                    <th scope="col">Type d'article</th>
                                    <th scope="col">Contenu</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->id }}</td>
                                    <td>{{ $blog->type_blog }}</td>
                                    <td>{{ $blog->contenu }}</td>
                                   
                                    
                                    <td><img src="{{ asset($blog->image_blog) }}" width="60" height="60" alt="{{ $blog->type_blog }}" srcset=""></td>
                                    <td class="d-flex"><a class="btn btn-sm btn-secondary" href="{{ route('editBlog', $blog) }}">Editer</a>
                              
                                    <form action="{{ route('blogs.destroy', $blog->id) }}" method="post" class="mt-2">
                                        @csrf
                                        @method('DELETE')

                                         <button type="submit" onclick="return confirm('Voulez-vous vraiment supprimer cet article ?');" class="px-2 py-2 text-white btn btn-danger">Supprimer</button>
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