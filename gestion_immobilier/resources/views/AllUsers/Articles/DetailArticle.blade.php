@extends('AllUsers.nav')
@section('title', 'detail')


@section('content')


<style>
    .card {
  flex-direction: row;
  align-items: center;
}
.card-title {
  font-weight: bold;
}
.card img {
  width: 30%;
  border-top-right-radius: 0;
  border-bottom-left-radius: calc(0.25rem - 1px);
}
button{
    width: 200px;
    font-size: 15px;
    font-weight: bold;
    color: #fff;
    background-color: #0D6EFD;
    border: 1px solid #0D6EFD;
    margin-left: 10px;
    border-radius: 6px;
    padding: 10px;
    
}
@media only screen and (max-width: 768px) {
  button{
    display: none;
  }
  .card-body {
    padding: 0.5em 1.2em;
  }
  .card-body .card-text {
    margin: 0;
  }
  .card img {
    width: 50%;
  }
}
@media only screen and (max-width: 1200px) {
  .card img {
    width: 40%;
  }
}
</style>
<p style="text-align: center; ">
    <a href="{{route('article.index')}}" style=" text-decoration: none">
        retour à la page precedente
      </a>
</p>
   
  
<div class="container">
    <div class="card">
        <img src="/storage/{{$articles->image}}" class="card-img-top" />
        <div class="card-body">
          <h5 class="card-title">{{$articles->nom}}</h5>
          <p class="card-text"><b>Description :</b></p>
          <p class="card-text"> 
              {{$articles->description}}
          </p>

          <p class="card-text justify-content-space-between">
           <span><b>categorie :</b> {{$articles->categorie}}</span>
           <span style="margin-left: 15px"><b> status:</b> {{($articles->status=='off') ? 'disponible' : 'non disponible'}}</span>
           <span style="margin-left: 15px"><b>Adresse :</b> {{$articles->adresse}}</span>

          </p>
          <div class="card-body gap-2">
            <form action="" method="post">
                <input type="text" name="commentaire" id=""><button  type="submit"> Ajouter un commentaire</button>
            </form>
        </div>
         
        </div>
      </div>
    </div>
    @endsection

































