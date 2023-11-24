@extends('AllUsers.nav')
@section('title', 'detail')


@section('content')





<div class="container vstack gap-2 w-100 justify-content-center">
  <form action="{{route('commentaire.update', $commentaire->id)}}" method="post">
    @csrf
    <input type="hidden" name="user_id" value="{{auth()->user()->id}}" />
    <input type="hidden" name="articles_id" value="{{$commentaire->articles_id}}" />
    <label for="">Modifier le commentaire </label><br>
    <input type="text" name="contenue" id="" value="{{$commentaire->contenue}}"><br><br><button type="submit"> Modifier le commentaire</button>
  </form>
</div>
@endsection