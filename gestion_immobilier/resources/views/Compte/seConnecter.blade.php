
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
    <form action="/connection" method="POST">
        @csrf
        <fieldset>
                <legend>Legend</legend>
                <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrer votre  email  ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" name="motdepasse" id="motdepasse" placeholder="Veuillez Saisir votre mot de passe" autocomplete="off">
                </div>
                <button name="connexion" type="submit" class="btn btn-primary">Se Connecter</button>
        </fieldset>
         <a href="/creerCompte">Créer un Compte</a>
    </form>










</body>
</html>