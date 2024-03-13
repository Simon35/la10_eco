@extends('home')
@section('content')
<section class="py-5 text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Commandez  votre <br><span class="badge badge-light">nouveau</span> <br>T-Shirt <span class="badge badge-primary ">préféré </span>!</h1>
            <p class="lead text-muted">Dénichez THE T-Shirt de votre série, films préféré(e).</p>

        </div>
    </section>

    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
         @foreach ($p as $produit)
         <div class="col">
           <div class="card shadow-sm">
           <img src="{{asset('products/'.$produit->photo)}}" class="card-img-top" alt="...">
             <div class="card-body">
               <p class="card-text">{{$produit->nom}} <br> {{$produit->description}}</p>
               <div class="d-flex justify-content-between align-items-center">
                    <span class="price">{{ number_format($produit->prix_ht,2)}} €</span>
                    <a href="{{route('voir_produit',['id'=>$produit->id])}}" class="btn btn-sm btn-outline-secondary"><i class="fas fa-eye"></i></a>
                </div>
             </div>
           </div>
         </div>
             
         @endforeach

      </div>
    </div>
  </div>
@endsection