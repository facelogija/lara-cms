
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projektų kūrimas</title>
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
@include('admin.layouts.form_errors')
    <div class="card">
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <h4 class="mt-3">Kurti naują/Projektą</h4>
            <!-- Message/ if post uploaded successfully-->
            @include('admin.modals.alerts.success')
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="{{route('project.store')}}" enctype="multipart/form-data" method="post" >
                  @csrf
                <div class="form-row">
                    <div class="col">
                        <!-- Title -->
                        <div class="md-form">
                            <input type="text" id="title" name="title" class="form-control" placeholder="Pavadinimas">
                        </div>
                    </div>
                    <div class="col">
                        <!-- Author -->
                        <div class="md-form">
                            <input type="text" id="author" name="author" class="form-control" placeholder="Autorius">
                        </div>
                    </div>
                </div>
                <!-- Video url  -->
                <div class="md-form">
                    <input placeholder="Nuoroda į vaizdinę medžiagą" type="file" id="img" name="img" class="form-control">
                    <small id="img" class="form-text text-muted mb-4">
                        Privalo būti internetinė nuoroda
                    </small>
                </div>
                <!-- All post content -->
                <div class="md-form">
                    <textarea class="form-control" id="content"  name="content"></textarea>    
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                        CKEDITOR.replace( 'content', {
                          filebrowserUploadUrl: "{{route('project.upload', ['_token' => csrf_token() ])}}",
                          filebrowserUploadMethod: 'form'
                        });
                    </script>
                    <small id="" class="form-text text-muted mb-4">
                        Projekto turinys
                    </small>
                </div>
                <!-- Sent data to controller -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Išsaugoti</button>
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