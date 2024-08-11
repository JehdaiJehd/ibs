@extends('layouts_index.base')



@section('content_principal')


<h5 class="text-center">Lire l'article</h5>


<div class="bg-light rounded h-100 p-4 col-sm-12 col-xl-6 ">
       

       <div class="album py-5 bg-light">
               <div class="container">
       
              
               <div class="card">
         <img src="{{ $blog->image_blog }}" class="card-img-top" alt="green iguana" />
         <div class="card-body">
           <h4>{{ $blog->type_blog }}</h4>
           <p class="card-text">
            {{$blog-> contenu}}
           </p>
           
         </div>
       </div>
                 
       
              
               </div>








@stop 
