
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projektų paieška</title>
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
<div class="card">
    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">
        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="{{route('project.review')}}" enctype="multipart/form-data" method="post" >
              @csrf
            <div class="form-row">
                <div class="col">
                        @if($errors->any())
                        <div class="alert alert-danger mt-3" role="alert">
                        {{$errors->first()}}
                        </div>
                        @endif
                    <!-- Title -->
                    <div class="md-form">
                        <input type="text" id="title" name="title" class="form-control" placeholder="Įveskite ieškomo straipsnio pavadinimą">
                    </div>
                </div>
            </div>
            <!-- Sent data to controller -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Ieškoti</button>
        </form>
        <!-- Form -->
    </div>
</div>
</div>
</main>
  <!--Main layout-->

    <!-- jQuery -->
    <script type="text/javascript" src="js/admin/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/admin/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/admin/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/admin/mdb.min.js"></script>
    <!-- Your custom scripts -->
    <script type="text/javascript" src="js/admin/script.js"></script>
</body>
</html>

</body>
</html>