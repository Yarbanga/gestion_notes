<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title class="MT-4">GESTION DES NOTES</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
  <link href="{{asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/style.css') }}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}" />
  <link href="{{asset('assets/css/style.css') }}" rel="stylesheet">
</head>
<body>
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <header id="header">
    <div class="d-flex flex-column">
      <div class="profile">
      <a href=""><img src="{{asset('assets/img/gallery/g1.jpg') }}" alt="" class="img-fluid rounded-circle"></a>       
<h1 class="text-light">
<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
 <span class="caret"></span>
</a></h1>
  <p>
        <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</a>
        <a class="dropdown-item" href="register">Ajouter un Professeur</a>
        
           <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form> <br>      
  </p>                                    
        
      </div>

      <nav class="nav-menu ">
        <ul>
          <li class="active"><a href=""><i class="bx bx-home"></i> <span>Accueil</span></a></li>
          <li><a href=""><i class="bx bx-book-content"></i> <span>Nouveau</span></a></li>
          <li><a href=""><i class="bx bx-book-content"></i> <span>Ajouter</span></a></li>
          <li><a href=""><i class="bx bx-book-content"></i> <span></span></a></li>
          <li><a href=""><i class="bx bx-file-blank"></i> <span>Liste</span></a></li>
          <li><a href=""><i class=" bx bx-user"></i>Réimprimer</a></li>          
        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->