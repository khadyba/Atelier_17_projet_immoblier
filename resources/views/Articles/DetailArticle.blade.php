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
                    <h3 class="card-header" style="color: black">{{$article->nom}}</h3>
                    <div class="card-body">
                        <h6 class="card-subtitle text-black">categorie : {{$article->categorie}}</h6>
                    </div>
                    <img src="/strorage/{{$article->image}}" alt="">
                    <div class="card-body">
                        <h6 class="text-black">status: {{($article->status=='off') ? 'disponible' : 'non disponible'}}</h6>
                    </div>
                    <div class="card-body">
                        <span>Description</span>
                        <p class="card-text" style="color: rgb(10, 10, 10)">{{$article->description}}</p>
                    </div>
                    <div class="card-footer text-muted" style="color: black">
                        <h6 class="card-subtitle text-black">date de publication: {{$article->created_at}}</h6>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="text" name="commentaire" id=""><button type="submit"> Ajouter un commentaire</button>
                        </form>
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