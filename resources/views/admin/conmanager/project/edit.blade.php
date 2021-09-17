<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Projekto redagavimas</title>
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
    <h3 class="mt-5 ml-3">Redagavimas/{{ $project->title }}</h3>
    <div class="container-fluid mt-3">
  <!-- Heading -->
@include('admin.layouts.form_errors')
    <div class="card">
        <!--Card content-->
        <div class="card-body px-lg-5 pt-0">
            <!-- Form -->
            <form class="text-center" style="color: #757575;" action="{{ route('project.update', $project->id) }}" enctype="multipart/form-data" method="post" >
                @csrf
                @method('PATCH')
                <div class="form-row">
                    <div class="col">
                        <!-- Title -->
                        <div class="md-form">
                            <input type="text" id="title" name="title" class="form-control" value="{{ old('title') ?? $project->title }}">
                        </div>
                    </div>
                    <div class="col">
                        <!-- Author -->
                        <div class="md-form">
                            <input type="text" id="author" name="author" class="form-control" value="{{ old('author') ?? $project->author }}">
                        </div>
                    </div>
                </div>
                <!-- image  -->
                <div class="md-form">
                    <input type="file" id="img" name="img" class="form-control" aria-describedby="video_url">
                    <small id="video_url" class="form-text text-muted mb-4">
                        Fotografija
                    </small>
                </div>
                <!-- All lesson content with ckeditor -->
                <div class="md-form">
                    <textarea class="form-control" id="content"  name="content">{{ old('content') ?? $project->content }}</textarea>    
                    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
                    <script>
                        CKEDITOR.replace( 'content', {
                          filebrowserUploadUrl: "{{route('project.upload', ['_token' => csrf_token() ])}}",
                          filebrowserUploadMethod: 'form'
                        });
                    </script>
                    <small id="" class="form-text text-muted mb-4">
                        Straipsnio turinys
                    </small>
                </div>
                <!-- Sign up button -->
                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">Išsaugoti</button>
            </form>
            <!-- Form -->
        </div>
    </div>
  <!-- Heading -->
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