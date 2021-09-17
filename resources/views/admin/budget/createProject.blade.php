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
    <div class="card p-3">
        @include('admin.modals.alerts.success')
        <h4>PROJEKTO KŪRIMAS</h4>
        <hr class="m-0 p-0">
        <form class="text-center" style="color: #757575;" action="{{route('budget.store')}}" enctype="multipart/form-data" method="post" >
              @csrf
            <div class="form-row">
                <div class="col col-md-12">
                    <!-- Title -->
                    <div class="md-form">
                        <input type="text" id="title" name="title" class="form-control" placeholder=" Projekto pavadinimas">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-6">
                    <!-- Project start -->
                    <label>Planuojama projekto pradžia</label>
                    <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="planning_start" name="planning_start">
                </div>
                <div class="col col-md-6">
                    <!-- Project end -->
                    <label>Planuojama projekto pabaiga</label>
                    <input class="form-control" type="date" value="{{ date('Y-m-d') }}" id="plannig_end" name="plannig_end">
                </div>
            </div>
            <div class="form-row">
                <div class="col col-md-6 md-form">
                <input class="form-control" id="info" name="info" placeholder="Projeto informacija">
                </div>
                <div class="col col-md-6 md-form">
                <input class="form-control" id="authorized_capital" name="authorized_capital" placeholder="Pradinis kapitalas">
                </div>
            </div>
            <!-- Sent data to controller -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Išsaugoti</button>
        </form>
        <!-- Form -->
    </div>
  </div>



</main>
  <!--Main layout-->



</body>
</html>