
    @extends('AllUsers.nav')
    @section('title', 'listes des bien')
    <style>
      .banner{
        background-image:  url('https://png.pngtree.com/thumb_back/fh260/background/20230720/pngtree-evening-view-of-a-grand-contemporary-villa-in-dark-wood-featuring-image_3664854.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          color:beige;
          height: 350px;
          margin-top: 15px;
      }
    </style>

@section('content')

{{-- <h1 style="text-align: center" class="mt-5">
  Listes des Articles 
</h1> --}}

<div class="banner">
  <div class="container">
      <div class="row">
          <div class="col-sm-5">
              <h1 class="mt-5 "><b style="font-size: 50px;width:150px">DEPECHEZ-VOUS!</b></h1>
              <p><b style="font-size: 45px;width:150px">Obtenez la meilleure maison de vos reve</b></p>
              <button class="btn btn-primary">Contactez-nous!</button>
          </div>
         
      </div>
  </div>
</div>


<h1 style="text-align: center; font-weight:bold" class="mt-5"><span style="color: #0D6EFD; font-size: 18px">|PROPIETES</span><br>
  Nous Fournissons La Meilleur Propriété Que Vous Aimez
</h1>

<div class="container my-4 mt-5">
  <div class="row d-flex ">
    @forelse($articles as $article)
          <div class="col-md-4">
              <div class="card mb-2 d-flex">
                  <h3 class="card-header"style="color: black" >{{$article->nom}}</h3>
                  <div class="card-body">
                      <h6 class="card-subtitle text-black" > Categorie : {{$article->categorie}}</h6>
                  </div>
          <img src="/storage/{{$article->image}}" alt="">

          <div class="card-body">
            <h6 class="text-black">Adresse: {{$article->adresse}}</h6>
          </div>
          <div class="card-body">
            <p class="card-text" style="color: rgb(10, 10, 10)">status: {{($article->status=='off') ? 'disponible' : 'non disponible'}}</p>
          </div>
          <div class="card-body">
            <a href="{{route('article.show', $article->id)}}" class="card-link btn btn-secondary" style="color: blue;font-size:25px">Details</a>
          </div>
          <div class="card-footer text-muted" style="color: black">
            <h6 class="card-subtitle text-black">date de publication: {{$article->created_at}}</h6>
          </div>

        </div>
      </div>
      @empty
      aucun bien enregistrer

      @endforelse
    </div>
  </div>
  @endsection



























  









