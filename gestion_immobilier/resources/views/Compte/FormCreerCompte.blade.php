
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
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('user.store')}}" method="POST">
        @method('post')
        @csrf
        @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
        <fieldset>
                <legend>S'inscrire</legend>
                <div class="form-group">
                        <label for="text" class="form-label mt-4">non</label>
                        <input type="text" class="form-control" name="nom" id="prenom" aria-describedby="emailHelp" placeholder="Ecrire votre nom ici">
                </div>
             
                <div class="form-group">
                        <label for="text" class="form-label mt-4">prenon</label>
                        <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="emailHelp" placeholder="Ecrire votre prenom ici">
                </div>
               
                <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Ecrire votre  email ici ">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
                    <input type="password" class="form-control" name="password" id="motdepasse" placeholder="mettez un mot de passe ici" autocomplete="off">
                </div>
                <button type="submit" class="btn btn-primary mt-5">Inscriptions</button>
        </fieldset>
    </form>



</div>






</body>
</html>