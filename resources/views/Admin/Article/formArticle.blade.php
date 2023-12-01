@extends('Admin.nav')

@section('content')

<div class="container">

    <form action="{{route('admin.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="text" class="form-label">Nom</label>
            <input name="nom" type="text" class="form-control" id="nom">
            @error("nom")
            {{$message}}

            @enderror
            <input name="user_id" type="hidden" class="form-control" id="nom" value="{{$userId}}">

        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Catégorie</label>
            <select name="categorie" id="">
                <option value="luxe">luxe</option>
                <option value="moyen">Moyen</option>

            </select>

        </div>
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Description</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" name="description"></textarea>
            @error("description")
            {{$message}}

            @enderror
        </div>
        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Dimension</label>
            <input class="form-control" id="" name="dimension" type="number">
            @error("dimension")
            {{$message}}

            @enderror
        </div>
        <div class="form-group">
            <label for="image" class="form-label mt-4">Telecharger une image</label>
            <input class="form-control" type="file" id="formFile" name="image">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Adresse</label>
            <input name="adresse" type="text" class="form-control" id="adresse">
            @error("image")
            {{$message}}

            @enderror
        </div>

        <fieldset class="form-group">
            <legend class="mt-4">Status</legend>

            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="optionsRadios1" value="on" checked="">
                <label class="form-check-label" for="optionsRadios1">
                    Occuper </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="optionsRadios2" value="off">
                <label class="form-check-label" for="optionsRadios2">
                    non occuper
                </label>
            </div>
            <legend class="mt-4">Espace verte</legend>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="espace_verte" id="optionsRadios1">
                <input class="form-check-input" type="hidden" name="espace_verte" id="optionsRadios1" value="off">

                <label class="form-check-label" for="optionsRadios1">
                    disponible</label>
            </div>
        </fieldset>
        <div class="form-group">

            <button class=" btn btn-primary">
                Ajouter
            </button>
        </div>
    </form>

</div>
@endsection