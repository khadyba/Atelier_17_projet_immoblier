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
                <th scope="col">Dimension</th>
                <th scope="col">espace verte</th>
                <th scope="col">chambre</th>

                <th scope="col">Categorie</th>
                <th scope="col">Image</th>
                <th scope="col">adresse</th>
                <th scope="col">status</th>





                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($users as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->email}} m<sup>2</sup></td>
               
                <td class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{route('admin.edit', $user->id)}}" class="btn btn-primary">Editer user</a>
                    <form action="{{route('admin.destroy', $user->id)}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger">Delete user</button>
                    </form>
                    <a href="{{route('admin.chambrecreate', $user->id)}}" class="btn btn-secondary">Ajouter chambre</a>
                </td>




            </tr>
            @empty
            <h5>aucun utilisateur enregistrer </h5>
            @endforelse

        </tbody>
    </table>
</div>

@endsection