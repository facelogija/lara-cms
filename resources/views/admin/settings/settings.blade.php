<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/admin/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="/css/admin/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="/css/admin/style.css">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
<body>
  <!-- Navbar -->
    @include('admin.layouts.navbar') 
  <!-- Navbar -->
  <!-- Sidebar -->
    @include('admin.layouts.left_menu')
  <!-- Sidebar -->
  <!--Main layout-->
<main class="pt-5 mx-lg-5">
  <div class="container-fluid mt-5">
  <!-- Card -->
    <div class="card">
      <!--security slide button-->
      <div id="security_slide" class="row border-bottom mr-3 ml-3 cursor">
        <div class="col mt-3 mb-3 line-height-2">
          <i class="fas fa-shield-alt line-height-2 mr-1"></i>
          Saugumo nuostatos
        </div>
        <div class="col mt-3 mb-3">
          <i id="security_slide_arrow" class="fas fa-chevron-down float-right line-height-2 mr-3 menu_arrow"></i>
        </div>
      </div>
      <!--security slide button-->
        <!--security slide content-->
        <div class="not-display" id="security_slide_content">
          <div data-toggle="modal" data-target="#modal_changePassword" class="row border-bottom mr-3 ml-5">
            <a class="col mt-3 mb-3">
              <i class="fas fa-key mr-1 line-height-2"></i>
              Slaptažodžio keitimas
            </a>
            <div class="col mt-3 mb-3">
              <i class="fas fa-ellipsis-v float-right line-height-2 mr-3"></i>
            </div>
          </div>
          <div class="row border-bottom mr-3 ml-5">
            <div data-toggle="modal" data-target="#modal_twoFactorConfirmation" class="col mt-3 mb-3 cursor_pointer">
              <i class="fas fa-check-double mr-1 line-height-2"></i>
              Dviejų veiksnių autentifikavimas
            </div>
            <div class="col mt-3 mb-3">
              <i class="fas fa-ellipsis-v float-right line-height-2 mr-3"></i>
            </div>
          </div>
          <!--<div class="row border-bottom mr-3 ml-5">
            <div class="col mt-3 mb-3">
              <i class="fas fa-user-lock mr-1 line-height-2"></i>
              Saugos įvykiai
            </div>
            <div class="col mt-3 mb-3">
              <i class="fas fa-ellipsis-v float-right line-height-2 mr-3"></i>
            </div>
          </div>-->
        </div>
        <!--security slide content-->
      <!--design slide button-->
      <div class="row border-bottom mr-3 ml-3 cursor">
        <div class="col mt-3 mb-3 line-height-2">
          <i class="fas fa-pencil-ruler line-height-2 mr-1"></i>
          Dizaino nustatymai
        </div>
        <div class="col mt-3 mb-3">
          <i class="fas fa-chevron-down float-right line-height-2 mr-3 menu_arrow"></i>
        </div>
      </div>
    <!--design slide button-->
    <!--personal info slide button-->
      <div id="personal_info_slide" class="row border-bottom mr-3 ml-3 cursor">
        <div class="col mt-3 mb-3 line-height-2">
          <i class="far fa-address-card line-height-2 mr-1"></i>
          Asmeninė informacija
        </div>
        <div class="col mt-3 mb-3">
          <i id="personal_info_slide_arrow" class="fas fa-chevron-down float-right line-height-2 mr-3 menu_arrow"></i>
        </div>
      </div>
    <!--personal info slide button-->
      <!--personal info slide content-->
          <div class="not-display" id="personal_info_slide_content">
            <div class="row border-bottom mr-3 ml-5">
              <a href="{{ route('admin.profile') }}" class="col mt-3 mb-3 non_style_link">
                <i class="fas fa-eye mr-1 line-height-2"></i>
                Informacijos peržiūra
              </a>
              <div class="col mt-3 mb-3">
                <i class="fas fa-ellipsis-v float-right line-height-2 mr-3"></i>
              </div>
            </div>
            <div class="row border-bottom mr-3 ml-5">
              <a data-toggle="modal" data-target="#edit_profile_modal" class="col mt-3 mb-3 non_style_link">
                <i class="fas fa-user-edit mr-1 line-height-2"></i>
                Informacijos redagavimas
              </a>
              <div class="col mt-3 mb-3">
                <i class="fas fa-ellipsis-v float-right line-height-2 mr-3"></i>
              </div>
            </div>

          </div>
          <!--personal info slide content slide content-->
  <!-- Card -->
</div>
</div>
 <script>
  $(document).ready(function(){
    $("#security_slide").click(function(){
      $("#security_slide_content").slideToggle("slow");
      $("#security_slide_arrow").toggleClass('flip');
    });
  });
</script>
<script>
  $(document).ready(function(){
    $("#personal_info_slide").click(function(){
      $("#personal_info_slide_content").slideToggle("slow");
      $("#personal_info_slide_arrow").toggleClass('flip');
    });
  });
</script>

@include('admin.modals.settings.twoFactorConfirmation')
@include('admin.modals.profile.changePassword')
@include('admin.modals.profile.edit_profile')
</main>
  <!--Main layout-->



</body>
</html>
