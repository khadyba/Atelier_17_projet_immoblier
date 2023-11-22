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
<style>
          .grid-container {
    display: grid;
    place-items: center;
    margin-left: 1000px; 
    height: 10px; 
    border: 1px 
    width:50px
}
.grid2-container {
    display: flex;
    place-items: center;
    margin-left: 1300px; 
    height: 10px; 
    border: 1px 
    width:50px
}
.btn {
    padding: 5px ; 
    font-size: 10px;
    /* margin-left: 500px;  */
}
</style>
<div class="grid-container">
  <a class="btn btn-primary" href="/Seconnecter">Se Connecter</a>
</div>
{{-- <div class="grid2-container">
  <a class="btn btn-primary" href="/creerCompte">Créer Un Compte</a>
</div> --}}

<div class="container my-4">
  <div class="row d-flex ">
          <div class="col-md-4">
              <div class="card mb-2 d-flex">
                  <h3 class="card-header"style="color: black" ></h3>
                  <div class="card-body">
                      <h6 class="card-subtitle text-black" ></h6>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none" width="100%" height="200"
                      aria-label="Placeholder: Image cap" focusable="false" role="img"
                      preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180"
                      style="font-size:1.125rem;text-anchor:middle">
                      <rect width="100%" height="100%" fill="#868e96"></rect>
                      <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                  </svg>
                  <div class="card-body">
                            <h6 class="text-black"></h6> 
                  </div>
                  <div class="card-body">
                      <p class="card-text" style="color: rgb(10, 10, 10)"></p>
                  </div>
                  <div class="card-body">
                      <a  href="/articles/detail/1" class="card-link btn" style="color: blue;font-size:25px" >Voir Plus</a>
                  </div>
                  <div class="card-footer text-muted"  style="color: black">
                      <h6 class="card-subtitle text-black" ></h6>
                  </div>
                 
              </div>
          </div>

         


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