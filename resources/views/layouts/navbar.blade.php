    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">
        <div class="row xl-d-flex">
            <div class='col-3'>
            <a class="border border-light rounded p-2 d-flex justify-content-center" data-toggle="modal" data-target="#leftmenu_modal">
                <span class=" navbar-toggler-icon "></span>
            </a>
            </div>
            <div class="col-9 d-inline">
                <a class="navbar-brand waves-effect d-inline justify-content-center mb-3 float-center" href="{{ route('main') }}"><img style="width: 2em;" src="https://arduinopagalba.lt/public/uploads/Logo.jpg">
                  <strong class=" ard-text font-italic"><span style="color:black;">Arduinopagalba</span>.lt</strong>
                </a>
            </div>
        
    </div>
      

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link waves-effect" href="{{ route('main') }}"><i class="fas fa-home"></i>
               <span class="sr-only">(current)</span>
              </a>
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
            <li class="nav-item">
              <a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank"><i class="fab fa-codepen"></i></a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item mr-1">
              <a href="/" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fab fa-github mr-2"></i>Arduinopagalba<span class="ard-text">.lt</span>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>

  @include('admin.modals.layouts.user_menu')
  @include('modals.leftmenu')
