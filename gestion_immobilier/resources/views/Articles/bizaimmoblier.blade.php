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

    <style>
        body{
          background-image:  url('https://media.inmobalia.com/imgV1/B98Le8~d7M9k3DegigWkzHXQlgzMFGqGJJp6ZQsIqKmaSvVFbscXqSePeuEDA0G3Biysl9MzHiY46B8uEiU~6nRY99wG_t7qhj2fzmJU8cB3UmAE1KPmhGWDgUlZUCPub9lxGGdvn18jxdlejA--.jpg');
          background-size: cover;
          background-repeat: no-repeat;
        }
        h1 {
          color: white;
          display: flex;
          justify-content: center;
          align-content: center;
          margin-top: 90px;
        }
        .grid-container {
    display: grid;
    place-items: center;
    height: 400px; /* Ajustez la hauteur selon vos besoins */
    border: 1px 
    width:100px
}

.my-button {
    padding: 10px 20px; /* Ajustez les valeurs de padding pour changer la taille */
    font-size: 30px; /* Ajustez la taille de la police */
}


      </style>

                <h1>BIENVENUE SUR BIZA RETROUVEZ LES MEILLEUR OFFRES IMMOBLIER ICI !</h1>

                <div class="grid-container">
                  <a class="btn btn-primary" href="/listeartilces">CLICQUEZ ICI POUR EXPLORER!</a>
              </div>
              

</body>
</html>