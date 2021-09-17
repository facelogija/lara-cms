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
        <div class="card-body">
            <h5 class="font-weight-bold font-italic">PASIRINKITE KRITERIJŲ PAGAL KŪRĮ VYKDYSITE PAIEŠKĄ</h5>
            <div class="container-fluid pt-3">
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                                <h7 class="font-weight-bold">Kriterijai:</h7>
                                <ul class="list-group mt-1">
                                    <li class="list-group-item"><a href="#" data-toggle="modal" data-target="#centralModal_search_post_by_title">Pavadinimą</a></li>
                                    <li class="list-group-item"><a href="" data-toggle="modal" data-target="#centralModal_search_post_by_created_at">Įkėlimo datą</a></li>
                                    <li class="list-group-item"><a href="" data-toggle="modal" data-target="#centralModal_search_post_by_updated_at">Atnaujinimo datą</a></li>
                                    <li class="list-group-item"><a href="" data-toggle="modal" data-target="#centralModal_search_post_by_author">Autorių</a>
                                    </li>
                                    <li class="list-group-item"><a href="" data-toggle="modal" data-target="#centralModal_search_post_by_type">Kategoriją</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>   
            </div> 
        </div>
    </div>
  </div>
</main>
  <!--Main layout-->
<!--Modals-->

@include('admin.modals.conmanager.post.search_by_title')
@include('admin.modals.conmanager.post.search_by_updated_at')
@include('admin.modals.conmanager.post.search_by_author')
@include('admin.modals.conmanager.post.search_by_type')
@include('admin.modals.conmanager.post.search_by_created_at')

<!--Modals-->


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