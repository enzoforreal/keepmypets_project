<!DOCTYPE html>
<html lang="en">
<head>
  <title>KeepMyPets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
  
</head>
<body>
    <nav class="navbar navbar-inverse"> 
        <div class="container-fluid">
            <div class="navbar-header">
            <a class="navbar-brand" href="{{URL::to('/')}}">KeepMyPet</a>
            </div class="text-center">
            <ul class="nav navbar-nav">
                <li><a href="{{URL::to('/')}}">Accueil</a></li>
                 <li><a href="{{URL::to('/MonCompte')}}">Mon Compte</a></li>
                <li><a href="{{URL::to('/apropos')}}">Apropos de nous</a></li>
                <li><a href="{{URL::to('/NosServices')}}">Nos Services</a></li>
                 <li><a href="{{URL::to('/DevenirPetSitter')}}">Devenir Pet-Sitter</a></li>
                 <li><a href="{{URL::to('/Administration')}}">Administration</a></li>
                 <li><a href="{{URL::to('/connexion')}}">Se connecter</a></li>
                  <li><a href="{{URL::to('/SeDeconnecter')}}">Se déconnecter</a></li>
                 <li><a href="{{URL::to('/inscription')}}">S'inscrire</a></li>
                   <li><a href="{{URL::to('/Faq')}}">Faq</a></li>
            </ul>
         
        </div>
    </nav>
    <div class="container">

            {{--debut du contenu--}}
            @yield('contenu')
            {{--fin du contenu--}}
        
    </div>

   

</body>
</html>