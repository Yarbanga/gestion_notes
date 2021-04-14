
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>GESTION DES NOTES</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
  <header id="header">
    <div class="d-flex flex-column">         
    </ul>
      </nav>
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>
    </div>
  </header>
      <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
          <div class="hero-container" data-aos="fade-in">
            <h1 style="margin-top: -43%; margin-left: 30px;">GESTION DE NOTES</h1>
            <p class="ml-5">Bienvenue <span class="typed" data-typed-items="sur votre,Espace de travail,"></span></p>   
          </div>
          <header id="header">
            <div class="d-flex flex-column">
            <div class="profile">
            <a href=""><img src="assets/img/gallery/g1.jpg" alt="" class="img-fluid rounded-circle">
            </a>        
            <h1 class="text-light">
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <span class="caret"></span>
               </a>
            </h1>
            <p>
              <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">Deconnexion</a>
              <a class="dropdown-item" href="" data-toggle="modal" data-target="#exampleModalCenter">
               Ajouter un Prof
              </a>
               <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLongTitle">Ajouter un professeur</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <form action="">
                        <form action="" method="post">
                            @csrf
                            @method('PUT')
                            <div class="input-group">
                              <div class="input-group-prepend">
                              
                              </div>
                             <div>
                                <input type="text" class="form-control" name="name" placeholder="Nom"><br>
                              <input type="text" class="form-control" name="sexe" placeholder="Sexe"><br>
                              <input type="text" class="form-control" name="matière" placeholder="Matière"><br>
                             </div>

                             <div class="ml-5">
                              <input type="text" class="form-control" name="prenoms" placeholder="Prénoms"><br>
                              <input type="text" class="form-control" name="classe" placeholder="Classe"><br>
                              <input type="text" class="form-control" name="matricule" placeholder="Matricule"><br>
                             </div>

                             <div>
                                <input type="année" class="form-control" name="annee" placeholder="Année scolaire"><br>
                              <input type="password" class="form-control" name="password" placeholder="Mot de passe"><br>
                              
                             </div>

                             <div class="ml-5">
                              <input type="text" class="form-control" name="status" placeholder="Status"><br>
                              <input type="password" class="form-control" name="password" placeholder="Confirmer mot de passe"><br>
                              
                             </div>
                             
                            </div>
                              <br>   <input type="hidden" class="form-control" name="prenoms" placeholder="">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="button" class="btn btn-primary">Confirmer</button>
                            </div>
                          </form>
                      
                    </div>
                    
                    
                  </div>
                </div>
              </div>
              <form id="logout-form" action="{{ route('message_flash') }}" method="POST" style="display: none;">
              @csrf
              </form> <br>  
            </p>
            <nav class="nav-menu" style="margin-top: -100px;">
              <ul>
                <li class="active"><a href="{{route('accueil')}}"><i class="bx bx-home"></i>
                  <span>Accueil</span></a>
                </li>
                <li>
                  <a href="{{route('list.prof')}}"><i class="bx bx-book-content"></i> <span>Liste Prof</span></a>
                </li>
                <li>
                   <a href="{{route('list.eleve')}}"><i class="bx bx-file-blank"></i> 
                    <span>Liste élèves</span></a>
                </li>
                <li>       
                  <a class="text-white" data-toggle="modal" data-target="#exampleModal">
                    <i class="bx bx-user"></i>
                    Ajouter un élèves
                  </a>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Ajouter des élèves</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="">
                            @csrf
                            @method('PUT')
                            <div class="input-group">
                              <div class="input-group-prepend">
                              
                              </div>
                             <div>
                                <input type="text" class="form-control" name="name" placeholder="Nom"><br>
                              <input type="text" class="form-control" name="sexe" placeholder="Sexe"><br>
                              <input type="date" class="form-control" name="naissance" placeholder="Date de naissance"><br>
                             </div>

                             <div class="ml-5">
                              <input type="text" class="form-control" name="prenoms" placeholder="Prénoms"><br>
                              <input type="text" class="form-control" name="classe" placeholder="Classe"><br>
                              <input type="text" class="form-control" name="matricule" placeholder="Matricule"><br>
                             </div>

                             <div>
                                <input type="année" class="form-control" name="annee" placeholder="Année scolaire"><br>
                              <input type="password" class="form-control" name="password" placeholder="Mot de passe"><br>
                              
                             </div>

                             <div class="ml-5">
                              <input type="text" class="form-control" name="status" placeholder="Status"><br>
                              <input type="password" class="form-control" name="password" placeholder="Confirmer mot de passe"><br>
                              
                             </div>
                             
                            </div>
                              <br>   <input type="hidden" class="form-control" name="prenoms" placeholder="">
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="button" class="btn btn-primary">Confirmer</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                 
                </li>
                <li>
                  <a type="button" class="text-white" data-toggle="modal" data-target="#exampleModalLong">
                    <i class="icofont-info"></i>
                    Information sur l'année
                  </a>
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Choisir l'année scolaire</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Faite un choix</span>
                              </div>
                              <input type="text" class="form-control" name="trimestre" placeholder="trimestre">
                              <input type="text" class="form-control" name="trimestre" placeholder="trimestre">
                            </div>
                                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="button" class="btn btn-primary">Confirmer</button>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <div style="margin-top: 30%;"></div>          
              </ul>
            </nav>
            <button type="button" class="mobile-nav-toggle d-xl-none">
              <i class="icofont-navigation-menu"></i>
            </button>
          </div>
        </header>
      </section>
 @include("include.footer")