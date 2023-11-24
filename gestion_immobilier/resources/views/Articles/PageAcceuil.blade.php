<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  @include('Layout.nav')
  <h1>
    Listes des Articles
  </h1>


  <div class="container my-4">
    <div class="row d-flex ">
      @forelse($articles as $article)
      <div class="col-md-4">
        <div class="card mb-2 d-flex">
          <h3 class="card-header" style="color: black">{{$article->nom}}</h3>
          <div class="card-body">
            <h6 class="card-subtitle text-black">Categorie: {{$article->categorie}} </h6>
          </div>

          <img src="/strorage/{{$article->image}}" alt="">

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


























  {{-- <div class="container">
        <form action="" method="POST">
           @csrf
            <div class="mb-3">
                <label for="text" class="form-label">Nom</label>
                <input name="nom" type="text"  class="form-control" id="nom" >
              </div>
              <div class="mb-3">
                <label for="text" class="form-label">Catégorie</label>
                <input name="categorie" type="text" class="form-control" id="categorie" >
              </div>
            <div class="mb-3">
                <label for="text" class="form-label">Description</label>
                <input name="description" type="text" class="form-control" id="description" >
              </div>
            <div class="mb-3">
              <label for="date" class="form-labe">date_publication</label>
              <input type="date" name="datePublication" class="form-control" id="datePublication" >
            </div>
           
            <fieldset class="form-group">
                <legend class="mt-4">Status</legend>
                <div class="form-check form-switch">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                  <label class="form-check-label" for="flexSwitchCheckDefault">Disponible</label>
                </div>
            <button type="submit" class="btn btn-primary">Créer</button>
          </form> --}}
  </div>









</body>

</html>