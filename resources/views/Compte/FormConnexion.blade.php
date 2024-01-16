<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/5/lumen/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        @if(session('error'))
        <div class="alert alert-danger mt-5">
            {{session('error')}}
        </div>

        @endif
        <form action="{{route('user.connection')}}" method="POST">
            @csrf
            <fieldset>
                <legend>Connexion</legend>
                <div class="form-group">
                    <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrer votre  email  ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" name="motdepasse" id="motdepasse" placeholder="Veuillez Saisir votre mot de passe" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Se Connecter</button>
            </fieldset>

        </form>
        <a href="{{route('user.create')}}" class="mt-5">Créer un Compte</a>





    </div>




</body>

</html>