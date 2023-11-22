@extends('Admin.nav')

@section('content')


<div class="container mt-5">

    @if(session('success'))
    <div class="alert alert-success mt-5">
        {{session('success')}}
    </div>

    @endif
    <div class="d-flex justify-content-between align-items-center">

        <a href="{{route('admin.create')}}" class="btn btn-primary">Ajouter un bien</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Categorie</th>
                <th scope="col">Image</th>
                <th scope="col">adresse</th>
                <th scope="col">status</th>





                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($articles as $article)
            <tr>
                <th scope="row">{{$article->id}}</th>
                <td>{{$article->nom}}</td>
                <td>{{$article->description}}</td>
                <td>{{$article->categorie}}</td>
                <td><img src="/strorage/{{$article->image}}"></td>
                <td>{{$article->adresse}}</td>
                <td>{{$article->status}}</td>
                <td class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{route('admin.edit', $article->id)}}" class="btn btn-primary">Editer</a>
                    <form action="{{route('admin.destroy', $article->id)}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>




            </tr>
            @empty
            <h5>cliquez sur le bouton au dessus pour ajouter un bien </h5>
            @endforelse

        </tbody>
    </table>
</div>

@endsection