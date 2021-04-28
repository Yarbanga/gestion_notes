<!-- <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" type="image/png" href="{{asset('assets/img/logo.jpg')}}">
  <title>Administration</title>
  <link href="{{asset('dash/assets/vendor/fonts/fontsGoogle.css')}}" rel="stylesheet">
  <link href="{{asset('dash/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{asset('dash/assets/css/sb-admin-2.css')}}" rel="stylesheet">
  <link href="{{asset('dash/assets/css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min')}}" rel="stylesheet">
  @yield('css')
 
</head>

<body id="page-top">
  <div id="wrapper">
    <ul class="navbar-nav sidebar   accordion" id="accordionSidebar">
      <li class="nav-item active mt-3">
        <a class="nav-link btn btn-sm" href="">
          <i class="fas fa-fw fa-desktop"></i>
          <span class="text-uppercase text-color">Accueil</span>
        </a>
      </li>
      <li class="nav-item active mt-3">
        <a class="nav-link btn btn-sm" href="">
          <i class="fas fa-fw fa-user"></i>
          <span class="text-uppercase text-color">Nos apprenant</span>
        </a>
      </li>
      <hr class="sidebar-divider">
       
      <li class="nav-item active ">
        <a class="nav-link btn btn-sm" href=" ">
          <i class="fas fa-fw fa-folder-open"></i>
          <span class="text-uppercase text-color">Notes</span>
        </a>
      </li> 
      <hr class="sidebar-divider">
      <li class="nav-item active">
        <a class="nav-link collapsed btn btn-sm" href="#" data-toggle="collapse" data-target="#collapseAppro" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span class="text-uppercase ">Programmes</span>
        </a>
        <div id="collapseAppro" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item text-uppercase" href="">Devoir</a>
            <a class="collapse-item text-uppercase" href="">Voir liste</a>
          </div>
        </div><br>
      </li>     
      <hr class="sidebar-divider">
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>
            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
              <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <button class="btn btn-dark" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>
              <div class="topbar-divider d-none d-sm-block"></div>
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                 
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                   
                  <div class="dropdown-divider"></div>
                  <a  href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item">
                    <i class="icofont-exit mr-2"></i> <span class="text-bold"> Deconnexion </span>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
                  </a>
                </div>
              </li>
            </ul>
          </nav>
      <div id="content" class="px-2)">
          @yield('content')
        </div>
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; nodam@2021</span>
          </div>
        </div>
      </footer>

    </div>

  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Attention!</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Vous desiriez vraiment vous deconnecter?</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Non</button>
          <a class="btn btn-primary" href="{{'login'}}">Oui</a>
        </div>
      </div>
    </div>
  </div>
   Bootstrap mon JavaScript
  <script src="{{asset('dash/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('dash/assets/vendor/jquery/jquery.validate.min.js')}}"></script>
  <script src="{{asset('dash/assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('dash/assets/js/sb-admin-2-2.min.js')}}"></script>
  <script src="{{asset('dash/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{asset('dash/assets/js/main.js')}}"></script>
 @yield('script')

</body>
</html>
 -->




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
                      <form action="{{route('profstore')}}" method="POST">
                          @csrf
                          <div class="input-group">
                            <div class="input-group-prepend">
                              
                            </div>
                          <div>
                            <input type="text" class="form-control" name="name" placeholder="Nom"><br>
                             <select value="classe" class="option form-control" name="sexe">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Sexe</option >
                                  <option>Masculin</option>
                                  <option>Feminin</option>             
                                </select> <br> 
                            <select value="classe" class="option form-control" name="matiere" placeholder="Classe">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Matières</option >
                                  <option>mathematique</option>
                                  <option>physique-chimie</option >
                                  <option>histoire</option>
                                  <option>geographie</option >
                                  <option>eps</option>      
                                  <option>svt</option>
                                  <option>anglais</option>
                                  <option>francais</option>
                                  <option>philo</option>      
                                  <option>allemand</option>
                                  <option>couture</option>              
                                </select> <br> 
                            <input type="email" class="form-control" name="email" placeholder="Address Mail" style="width: 225%"><br>
                          </div>

                          <div class="ml-5">
                            <input type="text" class="form-control" name="prenoms" placeholder="Prénoms"><br>
                            <select value="classe" class="option form-control" name="classe" placeholder="Classe">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Classes</option >
                                  <option>6ème</option>
                                  <option>5ème</option>
                                  <option>4ème</option >
                                  <option>3ème</option>
                                  <option>2nd</option >
                                  <option>1ère</option>      
                                  <option>TLA</option>
                                  <option>TLD</option>
                                  <option>TLC</option>              
                                </select> <br> 
                            <input type="text" class="form-control" name="matricule" placeholder="Matricule"><br>

                          </div>

                          <div>
                            <select value="classe" class="option form-control" name="annee">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Année</option >
                                  <option>2021-2022</option>
                                  <option>2022-2023</option>  
                                  <option>2024-2025</option>
                                  <option>2026-2027</option> 
                                  <option>2028-2029</option>
                                  <option>2030-2031</option>  
                                  <option>2032-2033</option>
                                  <option>2034-2035</option>             
                                </select> <br> 
                            <input type="password" class="form-control" name="password" placeholder="Mot de passe"><br>
                              
                          </div>

                          <div class="ml-5">
                            <select value="classe" class="option form-control" name="status">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="Statut" selected>statut</option >
                                  <option value="3">Elève</option>
                                  <option value="2">Professeur principal</option>  
                                  <option>Professeur</option>
                                              
                                </select> <br> 
                            <input type="password" class="form-control" name="password" placeholder="Confirmer mot de passe"><br>
                              
                          </div>
                             
                          </div>
                            <br><input type="hidden" class="form-control">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                            <button type="submit" class="btn btn-primary">Confirmer</button>
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
                  <a type="button" data-toggle="modal" data-target="#infos" class="text-white">
                    <i class="icofont-tag"></i> 
                    Choix matière
                  </a>
                    <div class="modal" id="infos">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Choix de matière</h4>
                              <button type="button" class="close" data-dismiss="modal">
                                <span>&times;</span>
                              </button>            
                            </div>
                            <div class="modal-body">
                              <form action="{{route('choix_store')}}" method="post">
                                @csrf
                                <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Choisir la classe
                              </div>
                                <select class="option form-control" name="classe" placeholder="">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option>6ème</option >
                                  <option>5ème</option>
                                  <option>4ème</option >
                                  <option>3ème</option>
                                  <option>2nd</option >
                                  <option>1ère</option>      
                                  <option>TLA</option>
                                  <option>TLD</option>
                                  <option>TLC</option>              
                                </select> <br> 
                              </div>
                              <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Choisir une matière</span>
                              </div>
                                <select class="option form-control" name="matiere" placeholder="Confirmer">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option>Mathematique</option >
                                  <option>Physique Chimie</option>
                                  <option>Français</option >
                                  <option>Anglais</option>
                                  <option>Histoire</option >
                                  <option>Geographie</option>      
                                  <option>EPS</option>
                                  <option>Philosophie</option>
                                  <option>SVT</option>              
                                </select>
                              
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="submit" class="btn btn-primary">Confirmer</button>
                            </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </span></a>
                </li>
                <li>       
                  <a class="text-white" data-toggle="modal" data-target="#exampleModal">
                    <i class="bx bx-user"></i>
                    Ajouter un élèves
                  </a>
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
                          <form action="{{route('eleve_store')}}" method="POST">
                            @csrf                  
                            <div class="input-group">
                              <div class="input-group-prepend">                        
                              </div>
                             <div>
                              <input type="text" class="form-control" name="name" placeholder="Nom"><br>
                              <select value="classe" class="option form-control" name="sexe">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Sexe</option >
                                  <option>Masculin</option>
                                  <option>Feminin</option>             
                                </select> <br> 
                              <input type="date" class="form-control" name="naissance" placeholder="Date_de_naissance"><br>
                              <input type="email" class="form-control" name="email" placeholder="Address Mail" style="width: 225%"><br>
                             </div>

                             <div class="ml-5">
                              <input type="text" class="form-control" name="prenoms" placeholder="Prénoms"><br>
                              <select class="option form-control" name="classe">
                                  <option disabled="disableb" selected="selected">Classes</option>
                                  <option>6ème</option >
                                  <option>5ème</option>
                                  <option>4ème</option >
                                  <option>3ème</option>
                                  <option>2nd</option >
                                  <option>1ère</option>      
                                  <option>TLA</option>
                                  <option>TLD</option>
                                  <option>TLC</option>              
                                </select> <br> 
                              <input type="text" class="form-control" name="matricule" placeholder="Matricule"><br>
                             </div>

                             <div>
                                <select value="classe" class="option form-control" name="annee">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="classe" selected>Année</option >
                                  <option>2021-2022</option>
                                  <option>2022-2023</option>  
                                  <option>2024-2025</option>
                                  <option>2026-2027</option> 
                                  <option>2028-2029</option>
                                  <option>2030-2031</option>  
                                  <option>2032-2033</option>
                                  <option>2034-2035</option>             
                                </select> <br> 
                              <input type="password" class="form-control" name="password" placeholder="Mot de passe"><br>
                              
                             </div>

                             <div class="ml-5">
                               <select value="classe" class="option form-control" name="status">
                                  <option disabled="disableb" selected="selected"></option>
                                  <option value="Statut" selected>statut</option >
                                  <option value="3">Elève</option>
                                  <option value="2">Professeur principal</option>  
                                  <option>Professeur</option>
                                              
                                </select> <br> 
                              <input type="password" class="form-control" name="password" placeholder="Confirmer mot de passe"><br>
                              
                             </div>
                             
                            </div>
                              <br>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="submit" class="btn btn-primary">Confirmer</button>
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                 
                </li>
                <li>
                  <a type="button" class="text-white" data-toggle="modal" data-target="#exampleModalLong">
                    <i class="icofont-info"></i>
                    Ajouter une note
                  </a>
                  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Choisir la matière</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{route('choix_store')}}" method="POST">
                            @csrf          
                            
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Faite un choix</span>
                              </div>
                            <select class="option form-control" name="trimestre">
                              <option disabled="disableb" selected="selected">Choisir la matière</option>
                              <option>Mathématique</option >
                              <option>PC</option>    
                              <option>Geographie</option >
                              <option>Histoire</option> 
                              <option>Français</option >
                              <option>Anglais</option>  
                              <option>Allamand</option >
                              <option>Eps</option>             
                            </select> <br>
                          </div>
                            <div class="input-group mt-2">
                              <div class="input-group-prepend">
                                <span class="input-group-text">Choisir une matière</span>
                              </div>
                            <select class="option form-control" name="trimestre">
                              <option disabled="disableb" selected="selected">Choisir une note</option>
                              <option>00</option >
                              <option>01</option>    
                              <option>02</option >
                              <option>03</option> 
                              <option>04</option >
                              <option>05</option>  
                              <option>06</option >
                              <option>07</option>
                              <option>08</option>  
                              <option>09</option >
                              <option>10</option>
                              <option>11</option>    
                              <option>12</option >
                              <option>13</option> 
                              <option>14</option >
                              <option>15</option>  
                              <option>16</option >
                              <option>17</option>
                              <option>18</option>  
                              <option>19</option >
                              <option>20</option>             
                            </select>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                              <button type="submit" class="btn btn-primary">Confirmer</button>
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