<!DOCTYPE html>
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
  <!-- Bootstrap mon JavaScript-->
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
