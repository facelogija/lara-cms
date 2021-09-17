    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="xl-show mr-3 border border-light rounded p-2" data-toggle="modal" data-target="#leftmenu">
            <span class="navbar-toggler-icon "></span>
        </a>
        <a class="xl-show navbar-brand waves-effect" href="{{ route('admin.show') }}" target="_blank">
          <strong class="blue-text">ARDUINOPAGALBA.LT</strong>
        </a>
         <a class="lg-show mr-3 border border-light rounded" data-toggle="modal" data-target="#fluidModalRightAdminMenu">
            <span class="fas fa-user-alt p-3"></span>
        </a>

        <!-- Collapse -->
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>-->



        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link waves-effect" href="#"><i class="fas fa-home"></i>
               <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <button class="nav-link waves-effect empty_button" data-toggle="modal" data-target="#centralModalLGIframeARDUINO"><i class="fas fa-eye"></i></button>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"
                target="_blank"><i class="fab fa-youtube"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"><i class="fab fa-linkedin"></i></a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item mr-1">
              <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>Arduinopagalba.lt
              </a>
            </li>
             <li class="nav-item">
              <a data-toggle="modal" data-target="#fluidModalRightAdminMenu" class="nav-link border border-light rounded waves-effect">
                <i class="fas fa-user-alt p-1"></i>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

  @include('admin.modals.layouts.user_menu')
  @include('admin.modals.layouts.left_menu')

    <!-- Navbar -->