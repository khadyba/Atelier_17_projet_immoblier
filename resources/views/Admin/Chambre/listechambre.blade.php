@extends('Admin.nav')

@section('content')


<div class="container mt-5">

    @if(session('success'))
    <div class="alert alert-success mt-5">
        {{session('success')}}
    </div>

    @endif
    <div class="d-flex justify-content-between align-items-center">

        <a href="{{route('admin.index')}}" class="btn btn-primary">retour en arriere</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titre</th>

                <th scope="col">Dimension</th>
                <th scope="col">Espace verte</th>
                <th scope="col">Toilette</th>


                <th scope="col">Image</th>





                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse($chambres as $chambre)
            <tr>
                <th scope="row">{{$chambre->id}}</th>
                <td>{{$chambre->titre}}</td>

                <td>{{$chambre->dimension}} m<sup>2</sup></td>
                <td>{{$chambre->espace_verte}} </td>
                <td>{{$chambre->toilette}}</td>
                @php

                $images= explode('|', $chambre->image);
                @endphp
                <td>
                    @foreach($images as $image)

                    <img src="/storage/{{$image}}" style="  width: 100px;">
                    @endforeach
                </td>

                <td class="d-flex gap-2 w-100 justify-content-end">
                    <a href="{{route('admin.chambreedit', $chambre->id)}}" class="btn btn-primary">Editer chambre</a>
                    <form action="{{route('admin.chambredestroy', $chambre->id)}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger">Delete chambre</button>
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