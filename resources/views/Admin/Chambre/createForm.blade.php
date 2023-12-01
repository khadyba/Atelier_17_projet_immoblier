@extends('Admin.nav')

@section('content')

<div class="container">

    <form action="{{route('admin.chambrestore')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">titre de la chambre</label>
            <input name="titre" type="text" class="form-control" id="nom">
            @error("titre")
            {{$message}}

            @enderror
            <input name="articles_id" type="hidden" class="form-control" id="nom" value="{{$articleId}}">


        </div>

        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Dimension</label>
            <input class="form-control" id="" name="dimension" type="number">
            @error("dimension")
            {{$message}}

            @enderror
        </div>
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">nombre de toilette</label>
            <input class="form-control" id="" name="toilette" type="number">
            @error("toilette")
            {{$message}}

            @enderror
        </div>
        <div class="form-group">
            <label for="image" class="form-label mt-4">Telecharger des images</label>
            <input class="form-control" type="file" id="formFile" name="image[]" multiple>
        </div>

        <div class="form-group mt-5">

            <button class=" btn btn-primary">
                Ajouter
            </button>
        </div>
    </form>

</div>
@endsection