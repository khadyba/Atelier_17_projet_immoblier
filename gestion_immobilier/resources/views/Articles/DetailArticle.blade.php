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
  details
</h1>
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
                      <a  href="/commentaire/ajouter/1" class="card-link btn" style="color: blue;font-size:25px" >Ajouter un commentaire</a>
                  </div>
                  <div class="card-footer text-muted"  style="color: black">
                      <h6 class="card-subtitle text-black" ></h6>
                  </div>
                 
              </div>
          </div>

          <div>
            <a thyp="button" href="/deconnexion">Se Deconnecter</a>
          </div>


  </div>
</div>

























    








</body>
</html>